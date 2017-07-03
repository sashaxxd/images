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
            [['title', 'text', ], 'required'],
            [['text'], 'string'],
            [['title',], 'string', 'max' => 255],
//         [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
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
    public function getImage()
    {
        return ($this->image) ? '' . $this->image : 'no-image.png';
    }

}
