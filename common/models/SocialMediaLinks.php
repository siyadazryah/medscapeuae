<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "social_media_links".
 *
 * @property int $id
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $vimeo
 * @property string $youtube
 * @property string $instagram
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class SocialMediaLinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_media_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['facebook', 'twitter', 'google_plus', 'vimeo', 'youtube', 'instagram'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['facebook', 'twitter', 'google_plus', 'vimeo', 'youtube', 'instagram'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'google_plus' => 'Google Plus',
            'vimeo' => 'Vimeo',
            'youtube' => 'Youtube',
            'instagram' => 'Instagram',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
