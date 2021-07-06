<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clinica".
 *
 * @property int $Clinica_id
 * @property string $Nome
 * @property string|null $Telefone
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property string|null $CEP
 * @property int|null $IBGE
 * @property string|null $Email
 * @property string|null $Desc
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 */
class Clinica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clinica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['IBGE', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Nome', 'Endereco', 'Imagem'], 'string', 'max' => 145],
            [['Telefone'], 'string', 'max' => 14],
            [['Bairro'], 'string', 'max' => 60],
            [['CEP'], 'string', 'max' => 10],
            [['Email'], 'string', 'max' => 80],
            [['Desc'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'Nome' => Yii::t('app', 'Nome'),
            'Telefone' => Yii::t('app', 'Telefone'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'CEP' => Yii::t('app', 'Cep'),
            'IBGE' => Yii::t('app', 'Ibge'),
            'Email' => Yii::t('app', 'Email'),
            'Desc' => Yii::t('app', 'Desc'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
    * Gets query for [[MedicoHasEspecialidade]].
    *
    * @return \yii\db\ActiveQuery
    */
    public function getMedicoHasEspecialidade()
    {
        return $this->hasMany(MedicoHasEspecialidade::className(), ['Clinica_id' => 'Clinica_id']);
    }

}
