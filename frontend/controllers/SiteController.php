<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\UploadForm;
use yii\web\UploadedFile;
use common\models\Slider;
use common\models\HomeContent;
use common\models\About;
use common\models\Testimonial;
use common\models\Partners;
use common\models\Contact;
use common\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'subscribe-mail'],
                'rules' => [
                    [
                        'actions' => ['signup', 'subscribe-mail'],
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
     * {@inheritdoc}
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $sliders = Slider::find()->where(['status' => '1'])->all();
        $testimonials = Testimonial::find()->where(['status' => '1'])->all();
        $partners = Partners::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $our_services= \common\models\Services::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->limit(6)->all();
        $home_content = HomeContent::findOne(1);
        $equipments = \common\models\Equipments::find()->where(['status' => '1'])->all();
        return $this->render('index', [
                    'sliders' => $sliders,
                    'home_content' => $home_content,
                    'testimonials' => $testimonials,
                    'partners' => $partners,
                    'equipments' => $equipments,
                    'our_services' => $our_services,
        ]);
    }

    public function actionAbout() {
        $about = About::findOne(1);
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $this->sendContactMail($model);
                Yii::$app->getSession()->setFlash('success', 'Your Enquiry Submitted Successfully');
                return $this->refresh();
            }
        }
        return $this->render('abouts', [
                    'about' => $about,
                    'model' => $model,
        ]);
    }

    /**
      //     * Displays gallery page.
      //     *
      //     * @return mixed
      // */
    public function actionGallery() {
        $project_gallery = \common\models\ProjectGallery::find()->where(['status' => '1'])->all();
        return $this->render('gallery', [
                    'project_gallery' => $project_gallery,
        ]);
    }

    /**
      //     * Displays gallery page.
      //     *
      //     * @return mixed
      // */
    public function actionClients() {
        $partners = Partners::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        return $this->render('client', [
                    'partners' => $partners,
        ]);
    }

    /**
      //     * Displays Contact page.
      //     *
      //     * @return mixed
      // */
    public function actionContact() {
        $contacts_content = Contact::findOne(1);
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $this->sendContactMail($model);
                Yii::$app->getSession()->setFlash('success', 'Your Enquiry Submitted Successfully');
                return $this->refresh();
            }
        }
        return $this->render('contact', [
                    'model' => $model,
                    'contacts_content' => $contacts_content,
        ]);
    }

    public function actionService($service = NULL) {
        $service_lists = \common\models\Services::find()->where(['status' => 1])->all();
        $service_testimonial = \common\models\ServiceTestimonial::findOne(1);
        if (isset($service)) {
            $services = \common\models\Services::find()->where(['status' => 1, 'canonical_name' => $service])->one();
        } else {
            $services = \common\models\Services::find()->where(['status' => 1, 'id' => 1])->one();
        }
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $this->sendContactMail($model);
                Yii::$app->getSession()->setFlash('success', 'Your Enquiry Submitted Successfully');
                return $this->refresh();
            }
        }
        return $this->render('service', [
                    'services' => $services,
                    'service_lists' => $service_lists,
                    'service_testimonial' => $service_testimonial,
                    'model' => $model,
        ]);
    }

    public function actionProducts() {
        $searchModel = new \common\models\ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['status' => 1]);
        $dataProvider->pagination->pageSize = 30;
        return $this->render('products', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBrandExpertise() {
        $brands = Brand::find()->where(['status' => 1])->all();
        $brand_content = BrandContent::findOne(1);
        return $this->render('brand-expertise', [
                    'brands' => $brands,
                    'brand_content' => $brand_content,
        ]);
    }

//    /**
//     * This function send contact message to admin.
//     */
    public function sendContactMail($model) {

        $subject = $model->subject;
        //    $to = "info@emperor-autocare.com";
        $to = "manu@azryah.com";
        $message = $this->renderPartial('contact-mail', ['model' => $model,]);
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <info@coralepitome.com>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }

    public function actionSubscribeMail() {
        if (Yii::$app->request->isAjax) {
            $email = $_POST['email'];
            if (!empty($email)) {
                $model = new \common\models\EmailSubscription();
                $model->email = $email;
                $exist = \common\models\EmailSubscription::find()->where(['email' => $email])->one();
                if (empty($exist)) {
                    if ($model->save()) {
                        $subject = 'Newsletter Subscription Enquiry From medscapeuae';
//                        $to = " info@medscapeuae.com";
                        $to = "manu@azryah.com";
                        $message = $this->renderPartial('subscribe-mail', ['email' => $email,]);
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
                        $headers .= 'From: <info@coralepitome.com>' . "\r\n";

                        mail($to, $subject, $message, $headers);
                        echo 1;
                        exit;
                    }
                } else {
                    echo 0;
                    exit;
                }
            }
        }
    }

}
