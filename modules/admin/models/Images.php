<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property string $id
 * @property string $title
 * @property string $image
 * @property string $text
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'text'], 'required'],
            [['text'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'text' => 'Text',
        ];
    }
}
