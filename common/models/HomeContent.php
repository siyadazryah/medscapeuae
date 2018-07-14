<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_content".
 *
 * @property int $id
 * @property string $time
 * @property string $gallery_content
 * @property string $service_content
 * @property string $partner_content
 * @property string $customer_content
 * @property int $UB
 * @property string $DOU
 * @property int $status
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
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['time', 'gallery_content', 'service_content', 'partner_content', 'customer_content'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Working Time',
            'gallery_content' => 'Gallery Content',
            'service_content' => 'Service Content',
            'partner_content' => 'Partner Content',
            'customer_content' => 'Customer Content',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
