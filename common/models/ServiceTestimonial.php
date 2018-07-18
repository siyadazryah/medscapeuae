<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_testimonial".
 *
 * @property int $id
 * @property string $image
 * @property string $message
 * @property string $author
 * @property string $designation
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ServiceTestimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message', 'author', 'designation'], 'required'],
            [['message'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
            [['image', 'author', 'designation'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'message' => 'Message',
            'author' => 'Author',
            'designation' => 'Designation',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
