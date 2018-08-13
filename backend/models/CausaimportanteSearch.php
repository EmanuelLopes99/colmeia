<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Causaimportante;

/**
 * CausaimportanteSearch represents the model behind the search form of `app\models\Causaimportante`.
 */
class CausaimportanteSearch extends Causaimportante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['images', 'mensage'], 'safe'],
            [['raised', 'goal'], 'number'],
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
        $query = Causaimportante::find();

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
            'raised' => $this->raised,
            'goal' => $this->goal,
        ]);

        $query->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'mensage', $this->mensage]);

        return $dataProvider;
    }
}
