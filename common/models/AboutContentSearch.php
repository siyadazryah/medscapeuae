<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AboutContent;

/**
 * AboutContentSearch represents the model behind the search form about `common\models\AboutContent`.
 */
class AboutContentSearch extends AboutContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UB', 'status'], 'integer'],
            [['banner_image', 'title1', 'value1', 'title2', 'value2', 'title3', 'value3', 'title4', 'value4'], 'safe'],
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
        $query = AboutContent::find();

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

        $query->andFilterWhere(['like', 'banner_image', $this->banner_image])
            ->andFilterWhere(['like', 'title1', $this->title1])
            ->andFilterWhere(['like', 'value1', $this->value1])
            ->andFilterWhere(['like', 'title2', $this->title2])
            ->andFilterWhere(['like', 'value2', $this->value2])
            ->andFilterWhere(['like', 'title3', $this->title3])
            ->andFilterWhere(['like', 'value3', $this->value3])
            ->andFilterWhere(['like', 'title4', $this->title4])
            ->andFilterWhere(['like', 'value4', $this->value]);

        return $dataProvider;
    }
}
