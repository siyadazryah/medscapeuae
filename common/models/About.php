<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $img_alt
 * @property string $content
 * @property string $image
 * @property string $title1
 * @property string $feature1
 * @property string $title2
 * @property string $feature2
 * @property string $title3
 * @property string $feature3
 * @property string $title4
 * @property string $feature4
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'image'], 'required'],
            [['content'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title', 'img_alt', 'title1', 'feature1', 'title2', 'feature2', 'title3', 'feature3', 'title4', 'feature4'], 'string', 'max' => 200],
//            [['image'], 'string', 'max' => 20],
//            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
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
            'img_alt' => 'Img Alt',
            'content' => 'Content',
            'image' => 'Image',
            'title1' => 'Title1',
            'feature1' => 'Feature1',
            'title2' => 'Title2',
            'feature2' => 'Feature2',
            'title3' => 'Title3',
            'feature3' => 'Feature3',
            'title4' => 'Title4',
            'feature4' => 'Feature4',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
