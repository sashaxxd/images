<?php

use yii\helpers\Html;

$images = $model->getImages();
?>
<?php
foreach($images as $img): ?>

<?= Html::img($img->getUrl('200x'))?>`

<?php endforeach; ?>
