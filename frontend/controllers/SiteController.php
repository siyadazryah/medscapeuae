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
//        $sliders = Slider::find()->where(['status' => '1'])->all();
//        $testimonials = Testimonial::find()->where(['status' => '1'])->all();
//        $categories = Category::find()->where(['status' => '1'])->all();
//        $home_content = HomeContent::findOne(1);
//        $about = About::findOne(1);
//        $contacts_content = Contact::findOne(1);
//        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
//        $partners = Partners::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
//        $home_services = HomePageService::find()->where(['status' => 1])->all();
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post())) {
//            $model->date = date('Y-m-d');
//            if ($model->validate() && $model->save()) {
//                $this->sendContactMail($model);
//                return $this->refresh();
//            }
//        }
        return $this->render('index', [
//                    'sliders' => $sliders,
//                    'home_content' => $home_content,
//                    'about' => $about,
//                    'testimonials' => $testimonials,
//                    'categories' => $categories,
//                    'model' => $model,
//                    'contacts_content' => $contacts_content,
//                    'services' => $services,
//                    'partners' => $partners,
//                    'home_services' => $home_services,
        ]);
    }

    public function actionAbout() {
//        $about = About::findOne(1);
//        $about_content = AboutContent::findOne(1);
//        $testimonials = Testimonial::find()->where(['status' => '1'])->all();
        return $this->render('abouts', [
//                    'about' => $about,
//                    'about_content' => $about_content,
//                    'testimonials' => $testimonials,
        ]);
    }

    /**
      //     * Displays gallery page.
      //     *
      //     * @return mixed
      // */
    public function actionGallery() {
//        $categories = Category::find()->where(['status' => '1'])->all();
        return $this->render('gallery', [
//                    'categories' => $categories,
        ]);
    }
    /**
      //     * Displays gallery page.
      //     *
      //     * @return mixed
      // */
    public function actionClients() {
//        $categories = Category::find()->where(['status' => '1'])->all();
        return $this->render('client', [
//                    'categories' => $categories,
        ]);
    }

    /**
      //     * Displays Contact page.
      //     *
      //     * @return mixed
      // */
    public function actionContact() {
//        $contacts_content = Contact::findOne(1);
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post())) {
//            $model->date = date('Y-m-d');
//            if ($model->validate() && $model->save()) {
//                $this->sendContactMail($model);
//                Yii::$app->getSession()->setFlash('success', 'Your Enquiry Submitted Successfully');
//                return $this->refresh();
//            }
//        }
        return $this->render('contact', [
//                    'model' => $model,
//                    'contacts_content' => $contacts_content,
        ]);
    }

//
    public function actionServices() {
//        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        return $this->render('service', [
//                    'services' => $services,
        ]);
    }

    public function actionService($service) {
        $services = Services::find()->where(['status' => 1, 'canonical_name' => $service])->one();
        return $this->render('service_detail', [
                    'services' => $services,
        ]);
    }

    public function actionProducts() {
//        $brands = Brand::find()->where(['status' => 1])->all();
//        $brand_content = BrandContent::findOne(1);
        return $this->render('products', [
//                    'brands' => $brands,
//                    'brand_content' => $brand_content,
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
        $to = "info@emperor-autocare.com";
        $message = $this->renderPartial('contact-mail', ['model' => $model,]);
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@eqec.ae";
//        echo $message;exit;
//        mail($to, $subject, $message, $headers);
    }
    
     public function actionSubscribeMail() {
        if (Yii::$app->request->isAjax) {
            $email = $_POST['email'];
            if (!empty($email)) {
                $model = new \common\models\EmailSubscription();
                $model->email = $email;
                if ($model->save()) {
                    $subject = 'Newsletter Subscription Enquiry From emperor.ae';
                    $to = "emperor@emperorlines.com";
                    $message = $this->renderPartial('subscribe-mail', ['email' => $email,]);
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                            "From: no-replay@eqec.ae";
//                    mail($to, $subject, $message, $headers);
                    echo json_encode(array('msg' => 'success'));
                    exit;
                } else {
                    echo json_encode(array('msg' => 'failed', 'error' => 'Email already used'));
                    exit;
                }
            }
        }
    }

}
