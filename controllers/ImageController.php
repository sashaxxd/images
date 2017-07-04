<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 03.07.2017
 * Time: 23:34
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\Images;



class ImageController  extends  Controller
{
    public function actionImages()
    {

        $model = Images::find()->all();

        return $this->render('images',
            [
                'model' => $model,
            ]);

    }

}