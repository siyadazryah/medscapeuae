<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $image
 * @property string $alt_tag
 * @property string $message
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Testimonial extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['title', 'name'], 'required'],
            [['message'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['title', 'alt_tag'], 'string', 'max' => 200],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'image' => 'Image',
            'alt_tag' => 'Image Alt',
            'message' => 'Message',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
