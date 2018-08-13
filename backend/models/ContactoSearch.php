<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacto;

/**
 * ContactoSearch represents the model behind the search form of `app\models\Contacto`.
 */
class ContactoSearch extends Contacto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'telefone'], 'integer'],
            [['email', 'endereco', 'titulo', 'descricao'], 'safe'],
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
        $query = Contacto::find();

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
            'telefone' => $this->telefone,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
