<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_content".
 *
 * @property int $id
 * @property string $banner_image
 * @property string $title1
 * @property string $value1
 * @property string $title2
 * @property string $value2
 * @property string $title3
 * @property string $value3
 * @property string $title4
 * @property string $value4
 * @property int $UB
 * @property int $DOU
 * @property int $status
 */
class AboutContent extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'about_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
//            [['banner_image', 'UB', 'DOU'], 'required'],
            [['UB', 'status'], 'integer'],
//            [['banner_image'], 'string', 'max' => 20],
            [['title1', 'value1','title2', 'value2', 'title3', 'value3', 'title4', 'value4'], 'string', 'max' => 200],
            [['banner_image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'banner_image' => 'Banner Image',
            'title1' => 'Title1',
            'value1' => 'Value1',
            'title2' => 'Title2',
            'value2' => 'Value2',
            'title3' => 'Title3',
            'value3' => 'Value3',
            'title4' => 'Title4',
            'value4' => 'Value4',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

}
