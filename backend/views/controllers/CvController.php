<?php

namespace backend\controllers;

use Yii;
use backend\models\Cv;
use backend\models\CvSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * CvController implements the CRUD actions for Cv model.
 */
class CvController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cv models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CvSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cv model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cv model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Cv();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {


            $post = Yii::$app->request->post();

            function manageImage($image, $name) {
                $image_extention = $image->extension;
                if ($image_extention == "pdf" || $image_extention == "PDF") {
                    $time = time();
                    $date = date('d M Y', $time);
                    if ($image->saveAs($full_path = dirname(__FILE__) . '/../../' . "/frontend/web/cv/" . $path = $name . ' ' . $date . '.' . $image->extension)) {
                        return $path;
                    } else {
                        return "error";
                    }
                } else {
                    return "not pdf";
                }
            }

            $path = $model->path = UploadedFile::getInstance($model, "path");



            $manage_image = manageImage($path, $model->name);
            if ($manage_image == "not pdf") {
                Yii::$app->session->setFlash('error', ' Not PDF file');
            } else if ($manage_image == "error") {
                Yii::$app->session->setFlash('error', ' Error');
            } else {
                $model->path = $manage_image;
            }

            $model->date = time();

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cv model.
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
     * Deletes an existing Cv model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cv model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cv the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Cv::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
