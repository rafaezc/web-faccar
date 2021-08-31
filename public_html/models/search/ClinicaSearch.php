<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clinica;

/**
 * ClinicaSearch represents the model behind the search form of `app\models\Clinica`.
 */
class ClinicaSearch extends Clinica
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Clinica_id', 'IBGE', 'status'], 'integer'],
            [['Nome', 'Telefone', 'Endereco', 'Bairro', 'Cidade', 'UF', 'CEP', 'Email', 'Desc', 'Imagem', 'criado_em', 'atualizado_em'], 'safe'],
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
        $query = Clinica::find();

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
            'Clinica_id' => $this->Clinica_id,
            'IBGE' => $this->IBGE,
            'criado_em' => $this->criado_em,
            'atualizado_em' => $this->atualizado_em,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Telefone', $this->Telefone])
            ->andFilterWhere(['like', 'Endereco', $this->Endereco])
            ->andFilterWhere(['like', 'Bairro', $this->Bairro])
            ->andFilterWhere(['like', 'Cidade', $this->Cidade])
            ->andFilterWhere(['like', 'UF', $this->UF])
            ->andFilterWhere(['like', 'CEP', $this->CEP])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Desc', $this->Desc])
            ->andFilterWhere(['like', 'Imagem', $this->Imagem]);

        return $dataProvider;
    }
}
