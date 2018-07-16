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
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['welcome_content', 'about_content', 'about_image', 'core_value_content', 'core_value_image', 'our_product_content', 'product_image1', 'product_image2', 'product_image3', 'product_image4', 'equipments', 'header_email', 'header_phone', 'about_in_footer', 'address', 'phone', 'mobile', 'web_url', 'DOC', 'DOU'], 'safe'],
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
            'email' => $this->email,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'welcome_content', $this->welcome_content])
            ->andFilterWhere(['like', 'about_content', $this->about_content])
            ->andFilterWhere(['like', 'about_image', $this->about_image])
            ->andFilterWhere(['like', 'core_value_content', $this->core_value_content])
            ->andFilterWhere(['like', 'core_value_image', $this->core_value_image])
            ->andFilterWhere(['like', 'our_product_content', $this->our_product_content])
            ->andFilterWhere(['like', 'product_image1', $this->product_image1])
            ->andFilterWhere(['like', 'product_image2', $this->product_image2])
            ->andFilterWhere(['like', 'product_image3', $this->product_image3])
            ->andFilterWhere(['like', 'product_image4', $this->product_image4])
            ->andFilterWhere(['like', 'equipments', $this->equipments])
            ->andFilterWhere(['like', 'header_email', $this->header_email])
            ->andFilterWhere(['like', 'header_phone', $this->header_phone])
            ->andFilterWhere(['like', 'about_in_footer', $this->about_in_footer])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'web_url', $this->web_url]);

        return $dataProvider;
    }
}
