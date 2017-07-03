<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;


class UploadImage extends \yii\db\ActiveRecord{

    public $image;

    public static function tableName()
    {
        return 'images';
    }

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function upload(){
        if($this->validate()){
            $this->image->saveAs("images/upload/{$this->image->baseName}.{$this->image->extension}");
        }else{
            return false;
        }
    }

}