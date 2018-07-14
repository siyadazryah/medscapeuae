<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand_content".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $offers
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class BrandContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'offers'], 'required'],
            [['content', 'offers'], 'string'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'offers' => 'Offers',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
