<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property int $category
 * @property string $image
 * @property string $image_alt
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Gallery extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['category'], 'required'],
            [['CB', 'UB', 'status'], 'integer'],
            [['image_alt', 'DOC', 'DOU'], 'safe'],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
//            [['image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'image' => 'Image',
            'image_alt' => 'Image Alt',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

    public function upload($file, $model) {
        if (\yii::$app->basePath . '/../uploads') {
            $path = yii::$app->basePath . '/../uploads/gallery/' . $model->id . '/image.' . $file->extension;
            $main_path = yii::$app->basePath . '/../uploads/gallery/' . $model->id;
            $name = 'image.' . $file->extension;
//            Image::thumbnail($path, 180, 250)
//                    ->save(\yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $file->extension, ['quality' => 50]);

            Image::thumbnail($path, 1024, 683)
                    ->save(\yii::$app->basePath . '/../uploads/gallery/' . $model->id . '/image.' . $file->extension, ['quality' => 50]);
            Image::thumbnail($path, 100, 67)
                    ->save(\yii::$app->basePath . '/../uploads/gallery/' . $model->id . '/small.' . $file->extension, ['quality' => 50]);
//
            return true;
        }
    }

}
