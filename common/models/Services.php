<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string $canonical_name
 * @property string $title
 * @property string $content
 * @property string $short_content
 * @property string $image
 * @property string $image_alt
 * @property string $gallery
 * @property int $sort
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Services extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'canonical_name', 'title', 'content'], 'required'],
            [['content'], 'string'],
            [['sort', 'CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['name', 'canonical_name', 'title', 'image_alt', 'gallery'], 'string', 'max' => 200],
            [['short_content'], 'string', 'max' => 250],
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
            'canonical_name' => 'Canonical Name',
            'title' => 'Title',
            'content' => 'Content',
            'short_content' => 'Short Content',
            'image' => 'Image',
            'image_alt' => 'Image Alt',
            'gallery' => 'Gallery',
            'sort' => 'Sort',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
    public function uploadMultiple($file, $product_id, $canname, $i) {
        if (\yii::$app->basePath . '/../uploads') {
            chmod(\yii::$app->basePath . '/../uploads', 0777);
//            $path2 = Yii::$app->basePath . '/../uploads/services/' . $model->id . '/gallery/';
//                    $size2 = [
//                        ['width' => 110, 'height' => 60, 'name' => 'small' . $i],
//                        ['width' => 700, 'height' => 438, 'name' => 'image' . $i],
//                    ];

            if (!is_dir(\yii::$app->basePath . '/../uploads/services/')) {
                mkdir(\yii::$app->basePath . '/../uploads/services/');
                chmod(\yii::$app->basePath . '/../uploads/services/', 0777);
            }
            if (!is_dir(\yii::$app->basePath . '/../uploads/services/' . $product_id)) {
                mkdir(\yii::$app->basePath . '/../uploads/services/' . $product_id);
                chmod(\yii::$app->basePath . '/../uploads/services/' . $product_id, 0777);
            }
            if (!is_dir(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery')) {
                mkdir(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery');
                chmod(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery', 0777);
            }
            $path = yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery';
            $main_path = yii::$app->basePath . '/../uploads/services/' . $product_id;
            $name = $this->fileExists($path, $canname, $image_name = $canname, $file->extension, 1);
            if ($file->saveAs($path . '/' . $name)) {
                chmod($path . '/' . $name, 0777);
                if (!is_dir(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery_thumb/')) {
                    mkdir(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery_thumb/');
                    chmod(\yii::$app->basePath . '/../uploads/services/' . $product_id . '/gallery_thumb/', 0777);
                }
                Image::thumbnail($path . '/' . $name, 100, 63)
                        ->save($main_path . '/gallery_thumb/' . $name, ['quality' => 80]);
                Image::thumbnail($path . '/' . $name, 700, 438)
                        ->save($main_path . '/gallery/' . $name, ['quality' => 80]);
            }
//            if ($file->saveAs(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/' . $file->name . '.' . $file->extension))
//                chmod(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/' . $file->name . '.' . $file->extension, 0777);
//            Image::thumbnail(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/' . $file->name . '.' . $file->extension, 500, 300)
//                    ->resize(new Box(500, 200))
//                    ->save(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/' . $file->name . '.' . $file->extension, ['quality' => 70]);
            return true;
        }
    }
    public function fileExists($path, $canname, $image_name, $extension, $sufix) {
        if (file_exists($path . '/' . $image_name . '.' . $extension)) {
            $image_name = basename($path . '/' . $canname . '_' . $sufix);
            return $this->fileExists($path, $canname, $image_name, $extension, $sufix + 1);
        } else {
            return $image_name . '.' . $extension;
        }
    }

}
