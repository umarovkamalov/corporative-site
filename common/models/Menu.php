<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_uz
 * @property string $name_tr
 * @property string $name_en
 * @property string $url
 * @property int $sort
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ru', 'name_uz', 'name_tr', 'name_en', 'url', 'sort'], 'required'],
            [['sort'], 'integer'],
            [['name_ru', 'url'], 'string', 'max' => 255],
            [['name_uz', 'name_tr', 'name_en'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Name Ru',
            'name_uz' => 'Name Uz',
            'name_tr' => 'Name Tr',
            'name_en' => 'Name En',
            'url' => 'Url',
            'sort' => 'Sort',
        ];
    }
}
