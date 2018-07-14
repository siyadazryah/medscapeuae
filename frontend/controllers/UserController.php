<?php

//use Yii;

namespace frontend\controllers;

use yii;
use yii\db\Expression;
use common\models\CmsMetaTags;

class UserController extends \yii\web\Controller {

    /**
     * Displays a Products based on category.
     * @param category_code $id
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

}
