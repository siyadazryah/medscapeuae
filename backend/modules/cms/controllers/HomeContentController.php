<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\HomeContent;
use common\models\HomeContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HomeContentController implements the CRUD actions for HomeContent model.
 */
class HomeContentController extends Controller {

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
     * Lists all HomeContent models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new HomeContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomeContent model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HomeContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HomeContent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HomeContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $about_image_ = $model->about_image;
        $core_value_image_ = $model->core_value_image;
        $product_image1_ = $model->product_image1;
        $product_image2_ = $model->product_image2;
        $product_image3_ = $model->product_image3;
        $product_image4_ = $model->product_image4;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $about_image = UploadedFile::getInstance($model, 'about_image');
            $core_value_image = UploadedFile::getInstance($model, 'core_value_image');
            $product_image1 = UploadedFile::getInstance($model, 'product_image1');
            $product_image2 = UploadedFile::getInstance($model, 'product_image2');
            $product_image3 = UploadedFile::getInstance($model, 'product_image3');
            $product_image4 = UploadedFile::getInstance($model, 'product_image4');
            if (!empty($about_image)) {
                $model->about_image = $about_image->extension;
            } else {
                $model->about_image = $about_image_;
            }
            if (!empty($core_value_image)) {
                $model->core_value_image = $core_value_image->extension;
            } else {
                $model->core_value_image = $core_value_image_;
            }
            if (!empty($product_image1)) {
                $model->product_image1 = $product_image1->extension;
            } else {
                $model->product_image1 = $product_image1_;
            }
            if (!empty($product_image2)) {
                $model->product_image2 = $product_image2->extension;
            } else {
                $model->product_image2 = $product_image2_;
            }
            if (!empty($product_image3)) {
                $model->product_image3 = $product_image3->extension;
            } else {
                $model->product_image3 = $product_image3_;
            }
            if (!empty($product_image4)) {
                $model->product_image4 = $product_image4->extension;
            } else {
                $model->product_image4 = $product_image4_;
            }
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $about_image, $core_value_image, $product_image1, $product_image2, $product_image3,$product_image4);
                Yii::$app->session->setFlash('success', "About Content Updated Successfully");
            }
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /*
     * Upload images
     */

    public function Upload($model, $about_image, $core_value_image, $product_image1, $product_image2, $product_image3,$product_image4) {
        $path = Yii::$app->basePath . '/../uploads/about/';
        if (!empty($about_image)) {
            $about_image->saveAs($path . 'about_image.' . $about_image->extension);
        }
        if (!empty($core_value_image)) {
            $core_value_image->saveAs($path . 'core_value_image.' . $core_value_image->extension);
        }
        if (!empty($product_image1)) {
            $product_image1->saveAs($path . 'product_image1.' . $product_image1->extension);
        }
        if (!empty($product_image2)) {
            $product_image2->saveAs($path . 'product_image2.' . $product_image2->extension);
        }
        if (!empty($product_image3)) {
            $product_image3->saveAs($path . 'product_image3.' . $product_image3->extension);
        }
        if (!empty($product_image4)) {
            $product_image4->saveAs($path . 'product_image4.' . $product_image4->extension);
        }
        return TRUE;
    }

    /**
     * Deletes an existing HomeContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HomeContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HomeContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HomeContent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
