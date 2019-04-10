<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property int $video
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img', 'video'], 'required'],
            [['text'], 'string'],
            [['video'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'img' => 'Img',
            'video' => 'Video',
        ];
    }
}
