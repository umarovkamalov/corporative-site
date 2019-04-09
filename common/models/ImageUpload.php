<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model {

    public $image;

//RULE NE ZATTI QAYTIP ZAGRUZKA QILIP ALIW JOLI
    public function rules()
    {
        return [
            [['image'], 'file', 'extensions'=>'jpg,png,jpeg']
        ];
    }
//RULE BOLMASA QALLEGEN ZATTI ZAGRUZKA QILIP QOYSA BOLADI


    public function uploadFile(UploadedFile $file)
    {

        $this->image = $file;

        $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);

        $file->saveAs(Yii::getAlias('@frontend/web') . '/upload/' . $filename);

        return $filename;
    }
}