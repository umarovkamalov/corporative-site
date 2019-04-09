<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form of `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'history', 'short_his', 'target', 'img', 'video', 'partners', 'logo'], 'safe'],
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
        $query = About::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'history', $this->history])
            ->andFilterWhere(['like', 'short_his', $this->short_his])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'partners', $this->partners])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
