<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico_has_Especialidades".
 *
 * @property int $Medico_id
 * @property int $Especialidade_id
 * @property int $Clinica_id
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 *
 * @property Clinica $clinica
 * @property Especialidade $especialidade
 * @property Medico $medico
 */
class MedicoHasEspecialidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Medico_has_Especialidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Medico_id', 'Especialidade_id', 'Clinica_id', 'status'], 'required'],
            [['Medico_id', 'Especialidade_id', 'Clinica_id', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Medico_id', 'Especialidade_id', 'Clinica_id'], 'unique', 'targetAttribute' => ['Medico_id', 'Especialidade_id', 'Clinica_id']],
            [['Clinica_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clinica::className(), 'targetAttribute' => ['Clinica_id' => 'Clinica_id']],
            [['Especialidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidade::className(), 'targetAttribute' => ['Especialidade_id' => 'Especialidade_id']],
            [['Medico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Medico::className(), 'targetAttribute' => ['Medico_id' => 'Medico_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'Especialidade_id' => Yii::t('app', 'Especialidade ID'),
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Clinica]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinica()
    {
        return $this->hasOne(Clinica::className(), ['Clinica_id' => 'Clinica_id']);
    }

    /**
     * Gets query for [[Especialidade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecialidade()
    {
        return $this->hasOne(Especialidade::className(), ['Especialidade_id' => 'Especialidade_id']);
    }

    /**
     * Gets query for [[Medico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medico::className(), ['Medico_id' => 'Medico_id']);
    }
}
