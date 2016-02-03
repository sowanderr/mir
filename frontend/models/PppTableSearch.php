<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PppTable;

/**
 * PppTableSearch represents the model behind the search form about `app\models\PppTable`.
 */
class PppTableSearch extends PppTable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_oper', 'com'], 'integer'],
            [['name_s', 'name_m', 'name_o', 'date'], 'safe'],
            [['ocenka'], 'number'],
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
        $query = PppTable::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_oper' => $this->id_oper,
            'date' => $this->date,
            'ocenka' => $this->ocenka,
            'com' => $this->com,
        ]);

        $query->andFilterWhere(['like', 'name_s', $this->name_s])
            ->andFilterWhere(['like', 'name_m', $this->name_m])
            ->andFilterWhere(['like', 'name_o', $this->name_o]);

        return $dataProvider;
    }
}
