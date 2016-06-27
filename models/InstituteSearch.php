<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institute;

/**
 * InstituteSearch represents the model behind the search form about `app\models\Institute`.
 */
class InstituteSearch extends Institute
{
    /**
     * @inheritdoc
     */
	 
    public function rules()
    {
        return [
			[['standorte_ID'], 'integer'],
            [['institut_name', 'institut_abk'], 'safe']
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
        $query = Institute::find();

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
            'standorte_ID' => $this->standorte_ID,
        ]);

        $query->andFilterWhere(['like', 'institut_name', $this->institut_name])
            ->andFilterWhere(['like', 'institut_abk', $this->institut_abk]);

        return $dataProvider;
    }
}
