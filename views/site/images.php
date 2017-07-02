<?php
//print_r($model);

foreach($model as $item):?>

    <?= $item->title; ?>
    <div id="wb_Image1">
        <img src="images/<?=  $item->image ?>" width="200px">
    </div>

   <?php endforeach; ?>
