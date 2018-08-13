<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Causas;

/**
 * CausasSearch represents the model behind the search form of `app\models\Causas`.
 */
class CausasSearch extends Causas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'imageCausa', 'dataCausa', 'causaDestaque'], 'safe'],
            [['id'], 'integer'],
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
        $query = Causas::find();

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
            'dataCausa' => $this->dataCausa,
            'id' => $this->id,
            'raised' => $this->raised,
            'goal' => $this->goal,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'imageCausa', $this->imageCausa])
            ->andFilterWhere(['like', 'causaDestaque', $this->causaDestaque]);

        return $dataProvider;
    }
}
