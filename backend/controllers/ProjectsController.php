<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\Projects;
use backend\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Projects();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $post = Yii::$app->request->post();
            $project_cat = $post['Projects']['category_id'];

            $end_date = $post['Projects']['end_date'];
            $start_date = $post['Projects']['start_date'];
            if ($model->end_date == "" || empty($model->end_date)) {
                $model->end_date = time() . "";
            } else {
                $date = explode("-", $end_date);
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
                $end_date_stamp = strtotime($month . "/" . $day . "/" . $year);
                $model->end_date = $end_date_stamp . "";
            }
            
            if ($model->start_date == "" || empty($model->start_date)) {
                $model->start_date = time() . "";
            } else {
                $date1 = explode("-", $start_date);
                $year1 = $date1[0];
                $month1 = $date1[1];
                $day1 = $date1[2];
                $start_date_stamp = strtotime($month1 . "/" . $day1 . "/" . $year1);
                $model->start_date = $start_date_stamp . "";
            }

            $logo = $model->image = UploadedFile::getInstance($model, "image");
            if (!empty($model->image)) {
                $logo_extention = $model->image->extension;
                if ($logo_extention == "jpg" || $logo_extention == "jpeg" || $logo_extention == "png") {
                    
                } else {
                    Yii::$app->session->setFlash('error', 'Image must be PNG, JPG or JPEG');
                    return $this->refresh();
                }
            } else {
                Yii::$app->session->setFlash('error', 'Image Cannot be empty !');
                return $this->refresh();
            }

            if ($model->image != "" || !empty($model->image)) {
                $model->image = $model->image->saveAs(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects/" . $path1 = $model->image->baseName . "_" . Yii::$app->security->generateRandomString() . '.' . $model->image->extension);
                $model->image = $path1;
            } else {
                $model->image = NULL;
            }
            $model->category_id = json_encode($model->category_id);
//            $model->category_id = $cats;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Item have been successfully created !');
                return $this->refresh();
            } else {
                if (isset($path1)) {
                    unlink(dirname(__FILE__) . '/../../' . "/frontend/web/images/projects/" . $path1);
                }
                Yii::$app->session->setFlash('error', 'Something went wrong, Could not create item !');
                return $this->refresh();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
