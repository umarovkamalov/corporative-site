<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "klients".
 *
 * @property int $id
 * @property string $image
 * @property string $data
 * @property string $company_name
 * @property string $contact_person
 * @property string $number
 * @property string $faks
 * @property string $e_mail
 * @property string $adres
 * @property string $type_klient
 * @property string $interesting_product
 * @property string $the_note
 * @property string $country
 */
class Klients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['company_name', 'contact_person', 'number', 'type_klient', 'interesting_product', 'the_note', 'country'], 'required'],
            [['the_note'], 'string'],
            [['image', 'company_name', 'adres'], 'string', 'max' => 255],
            [['contact_person', 'number', 'faks', 'e_mail', 'type_klient', 'interesting_product', 'country'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'data' => 'Data',
            'company_name' => 'Название Организации',
            'contact_person' => 'Контактное лицо',
            'number' => 'Телефон номер',
            'faks' => 'Faks',
            'e_mail' => 'Email',
            'adres' => 'Адрес',
            'type_klient' => 'Тип клиента',
            'interesting_product' => 'Интересующий продукт',
            'the_note' => 'Заметка',
            'country' => 'Город',
        ];
    }


    public function saveImage($filename)
    {

        $this->image = $filename;
        return $this->save(false);
    }
}
