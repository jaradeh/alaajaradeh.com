<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use backend\models\Contact;
use backend\models\Cv;
use backend\models\Projects;
use backend\models\ProjectCategory;
use backend\models\ProjectImages;
use backend\models\HomePageVisitor;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $model = new Contact();
        $cv = Cv::find()->orderBy(['id' => SORT_DESC])->one();
        $projects = Projects::find()->where(['status' => 3])->all();
        $categories = ProjectCategory::find()->all();
        return $this->render('index', [
                    'projects' => $projects,
                    'categories' => $categories,
                    'model' => $model,
                    'cv' => $cv,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionViewcvonline() {
        $find_cv = Cv::find()->one();
        return $find_cv->path;
    }

    public function actionDownloadcv() {

        function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if (getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if (getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if (getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if (getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if (getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }

        function get_current_ip() {
            $ip = file_get_contents('https://api.ipify.org');
            return json_encode($ip);
        }

        function get_client_info($url) {

            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        $url = "http://ip-api.com/json/";
        $current_ip = $get_ip = get_client_ip();
        if ($current_ip == "UNKNOWN") {
            $current_ip = get_current_ip();
        } else {
            $current_ip = $current_ip;
        }
        $url = $url . $current_ip;
        $array_all_data = get_client_info($url);
        $all_data = json_decode(get_client_info($url));

        if ($all_data->status == "success") {
            $check_if_ip_in_db = HomePageVisitor::find()->where(['ip' => $all_data->query])->one();

            if (sizeof($check_if_ip_in_db) <= 0) {
                $visits = 1;
                $save_into_visitors_db = Yii::$app->db->createCommand('INSERT INTO home_page_visitor (ip,connection,city,country,country_code,isp,lat,lon,org,region,region_name,status,timezone,zip,date,visits)
				VALUES (
				"' . $all_data->query . '",
				"' . $all_data->as . '",
				"' . $all_data->city . '",
				"' . $all_data->country . '",
				"' . $all_data->countryCode . '",
				"' . $all_data->isp . '",
				"' . $all_data->lat . '",
				"' . $all_data->lon . '",
				"' . $all_data->org . '",
				"' . $all_data->region . '",
				"' . $all_data->regionName . '",
				"' . $all_data->status . '",
				"' . $all_data->timezone . '",
				"' . $all_data->zip . '",
				"' . time() . '",
				"' . $visits . '")')
                        ->execute();
                $db_id = Yii::app()->db->getLastInsertedID();
            } else {
                $new_visits = (int) $check_if_ip_in_db->visits + 1;
                $db_id = $check_if_ip_in_db->id;
                Yii::$app->db->createCommand()
                        ->update('home_page_visitor', ['visits' => $new_visits], ['id' => $check_if_ip_in_db->id])
                        ->execute();

                $save_into_visitors_db = Yii::$app->db->createCommand('INSERT INTO download_cv (user_id,date)
				VALUES (
				"' . $db_id . '",
				"' . time() . '")')
                        ->execute();
            }
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new Contact();
        $success = "";
        if ($_POST) {
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->message = $_POST['message'];
            $model->date = time();
            if ($model->save()) {
                $msg = array("type" => "success", "message" => "Thank you! I will review the message and get back to you asap.");
                header('Content-Type: application/json');
                echo json_encode($msg);
            } else {
                $msg = array("type" => "danger", "message" => "Something went wrong! please try again later.");
                header('Content-Type: application/json');
                echo json_encode($msg);
            }
        } else {
            return $this->render('contact', [
                        'model' => $model,
                        'success' => $success,
            ]);
        }
    }

    public function actionProjectView() {
        $id = $_GET['id'];
        $find_project = Projects::find()->where(['id' => $id])->one();
        return $this->render('project-view', [
                    'project' => $find_project
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

}
