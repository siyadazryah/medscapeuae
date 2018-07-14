<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Services;
use common\models\ServicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller {

    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

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
     * Lists all Services models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ServicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Services model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Services();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $file12 = UploadedFile::getInstances($model, 'gallery');
            $model->image = $image->extension;
            $model->gallery = '';
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/services/' . $model->id . '/';
                    $size = [
                        ['width' => 110, 'height' => 60, 'name' => 'small'],
                        ['width' => 768, 'height' => 410, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }

                for ($i = 0; $i < sizeof($file12); $i++) {
                    if ($model->uploadMultiple($file12[$i], $model->id, 'image', $i)) {
// file is uploaded successfully
                    } else {
                        echo 'Image Upload Failed:';
                    }
//                    $path2 = Yii::$app->basePath . '/../uploads/services/' . $model->id . '/gallery/';
//                    $size2 = [
//                        ['width' => 110, 'height' => 60, 'name' => 'small' . $i],
//                        ['width' => 700, 'height' => 438, 'name' => 'image' . $i],
//                    ];
//                    Yii::$app->UploadFile->UploadFile($model, $image, $path2, $size2);
                }
                Yii::$app->session->setFlash('success', "New Services added Successfully");
                return $this->redirect(['create']);
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Services model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $file12 = UploadedFile::getInstances($model, 'gallery');
            $model->gallery = '';
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/services/' . $model->id . '/';
                    $size = [
                        ['width' => 110, 'height' => 60, 'name' => 'small'],
                        ['width' => 768, 'height' => 410, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                for ($i = 0; $i < sizeof($file12); $i++) {
                    if ($model->uploadMultiple($file12[$i], $model->id, 'image', $i)) {
// file is uploaded successfully
                    } else {
                        echo 'Image Upload Failed:';
                    }
                }
            }
            Yii::$app->session->setFlash('success', "Services Updated Successfully");
            return $this->redirect(['index']);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function actionAjax_imgdelete() {
        if (yii::$app->request->isAjax) {
            $image = Yii::$app->request->post()['image'];
//        echo yii::$app->homeUrl;exit;
            if ($image) {
                $img = explode('@', $image);
                unlink(yii::$app->basepath . '/../uploads/services/' . $img['0'] . '/gallery/' . $img['1']);
                unlink(yii::$app->basepath . '/../uploads/services/' . $img['0'] . '/gallery_thumb/' . $img['1']);
                echo json_encode(array('msg' => 'success', 'id' => $img['2']));
            } else {
                echo json_encode(array('msg' => 'error', 'title' => 'Image Not Found'));
            }
        }
    }

    /**
     * Deletes an existing Services model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
