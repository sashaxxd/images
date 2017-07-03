<?php
//print_r($model);

foreach($model as $item):?>

    <?= $item->title; ?>
    <div id="wb_Image1">
        <img src="uploads/<?=  $item->getImage() ?>" width="200px">
    </div>

   <?php endforeach; ?>
