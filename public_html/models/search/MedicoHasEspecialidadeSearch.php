<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedicoHasEspecialidade;

/**
 * MedicoHasEspecialidadeSearch represents the model behind the search form of `app\models\MedicoHasEspecialidade`.
 */
class MedicoHasEspecialidadeSearch extends MedicoHasEspecialidade
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Medico_id', 'Especialidade_id', 'Clinica_id', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
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
        $query = MedicoHasEspecialidade::find();

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
            'Medico_id' => $this->Medico_id,
            'Especialidade_id' => $this->Especialidade_id,
            'Clinica_id' => $this->Clinica_id,
            'criado_em' => $this->criado_em,
            'atualizado_em' => $this->atualizado_em,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
