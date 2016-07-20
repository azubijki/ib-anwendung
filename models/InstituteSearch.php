<?php

//Anleitung zum Erstellen von Spalten im GridView inkl. funktionierender Suchleiste: 
//http://www.yiiframework.com/wiki/653/displaying-sorting-and-filtering-model-relations-on-a-gridview/

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
    public $Standort; //Variable für den Standortnamen erstellt
    /**
     * @inheritdoc
     */
	 
    public function rules()
    {
        return [
            [['institut_name', 'institut_abk', 'Standort'], 'safe'] //Standort als safe deklariert
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
        $query = Institute::find()->joinWith(['standorte']);//MySQL join für die Relation zur Tabelle "standorte"

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
        
        //Hier wird definiert, wie die Tabelle sortiert wird
        $dataProvider->sort->attributes['Standort'] = [
            'asc' => ['standorte.standort_name' => SORT_ASC],
            'desc' => ['standorte.standort_name' => SORT_DESC],
        ];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'institut_name', $this->institut_name])
            ->andFilterWhere(['like', 'institut_abk', $this->institut_abk])
            ->andFilterWhere(['like', 'standorte.standort_name', $this->Standort]);

        return $dataProvider;
    }
}
