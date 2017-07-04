<?php

use yii\helpers\Html;

foreach($model as  $image){
    echo $image->title;
    $img = $image->getImage();
      echo Html::img($img->getUrl('200'), ['alt' => '']);
};


