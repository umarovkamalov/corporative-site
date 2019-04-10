<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Klients;

/**
 * KlientsSearch represents the model behind the search form of `common\models\Klients`.
 */
class KlientsSearch extends Klients
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['image', 'data', 'company_name', 'contact_person', 'number', 'faks', 'e_mail', 'adres', 'type_klient', 'interesting_product', 'the_note', 'country'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Klients::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'faks', $this->faks])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'type_klient', $this->type_klient])
            ->andFilterWhere(['like', 'interesting_product', $this->interesting_product])
            ->andFilterWhere(['like', 'the_note', $this->the_note])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
