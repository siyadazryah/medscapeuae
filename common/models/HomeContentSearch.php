<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomeContent;

/**
 * HomeContentSearch represents the model behind the search form about `common\models\HomeContent`.
 */
class HomeContentSearch extends HomeContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UB', 'status'], 'integer'],
            [['time', 'gallery_content', 'service_content', 'partner_content', 'customer_content', 'DOU'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = HomeContent::find();

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
            'UB' => $this->UB,
            'DOU' => $this->DOU,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'gallery_content', $this->gallery_content])
            ->andFilterWhere(['like', 'service_content', $this->service_content])
            ->andFilterWhere(['like', 'partner_content', $this->partner_content])
            ->andFilterWhere(['like', 'customer_content', $this->customer_content]);

        return $dataProvider;
    }
}
