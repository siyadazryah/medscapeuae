<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_content".
 *
 * @property int $id
 * @property string $welcome_content
 * @property string $about_content
 * @property string $about_image
 * @property string $core_value_content
 * @property string $core_value_image
 * @property string $our_product_content
 * @property string $product_image1
 * @property string $product_image2
 * @property string $product_image3
 * @property string $product_image4
 * @property string $equipments
 * @property string $header_email
 * @property string $header_phone
 * @property string $about_in footer
 * @property string $address
 * @property string $phone
 * @property string $mobile
 * @property int $email
 * @property string $web_url
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomeContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['welcome_content', 'about_content', 'core_value_content', 'our_product_content', 'header_email', 'header_phone', 'about_in_footer', 'address', 'phone', 'mobile', 'email', 'web_url'], 'required'],
            [['welcome_content', 'about_content', 'core_value_content', 'our_product_content', 'equipments', 'about_in_footer', 'address'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['email', 'DOC', 'DOU'], 'safe'],
            [['about_image', 'core_value_image', 'product_image1', 'product_image2', 'product_image3', 'product_image4'], 'string', 'max' => 50],
            [['header_email', 'header_phone', 'phone', 'mobile'], 'string', 'max' => 25],
            [['web_url'], 'string', 'max' => 500],
            [['about_image', 'core_value_image', 'product_image1', 'product_image2', 'product_image3','product_image4'], 'file', 'extensions' => 'jpg,png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'welcome_content' => 'Welcome Content',
            'about_content' => 'About Content',
            'about_image' => 'About Image',
            'core_value_content' => 'Core Value Content',
            'core_value_image' => 'Core Value Image',
            'our_product_content' => 'Our Product Content',
            'product_image1' => 'Product Image1',
            'product_image2' => 'Product Image2',
            'product_image3' => 'Product Image3',
            'product_image4' => 'Product Image4',
            'equipments' => 'Equipments',
            'header_email' => 'Header Email',
            'header_phone' => 'Header Phone',
            'about_in_footer' => 'About In Footer',
            'address' => 'Address',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'web_url' => 'Web Url',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
