<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "email_subscription".
 *
 * @property int $id
 * @property string $email
 * @property string $date
 * @property int $status
 */
class EmailSubscription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email_subscription';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['status'], 'integer'],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
