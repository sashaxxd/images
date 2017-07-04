<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:30
 */

namespace app\models;


use yii\db\ActiveRecord;

class Images extends ActiveRecord
{



    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static  function tableName()
    {
        return 'images';
    }



}