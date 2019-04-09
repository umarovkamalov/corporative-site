<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $history
 * @property string $shor_his
 * @property string $target
 * @property string $img
 * @property string $video
 * @property string $logo
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'history', 'shor_his', 'target', 'img', 'video', 'logo'], 'required'],
            [['history'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['shor_his', 'target', 'img', 'video', 'logo'], 'string', 'max' => 255],
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
            'history' => 'History',
            'shor_his' => 'Shor His',
            'target' => 'Target',
            'img' => 'Img',
            'video' => 'Video',
            'logo' => 'Logo',
        ];
    }
}
