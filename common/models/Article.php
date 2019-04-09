<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string $text
 * @property string $date
 * @property string $image
 * @property string $short
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'type', 'text', 'short_text'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title', 'type', 'short_text'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 255],
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
            'type' => 'Type',
            'text' => 'Text',
            'date' => 'Date',
            'image' => 'Image',
            'short_text' => 'Short',
        ];
    }

    public function saveImage($filename)
    {

        $this->image = $filename;
        return $this->save(false);
    }
}
