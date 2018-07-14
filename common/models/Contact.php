<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $map
 * @property string $address
 * @property string $whatsapp
 * @property string $phone
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['map', 'address', 'whatsapp', 'phone'], 'required'],
            [['address'], 'string'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['map'], 'string', 'max' => 400],
            [['whatsapp', 'phone'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'map' => 'Map',
            'address' => 'Address',
            'whatsapp' => 'Whatsapp',
            'phone' => 'Phone',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
