<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $CRM
 * @property string|null $Nome
 * @property string|null $Telefone
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property string|null $Cidade
 * @property string|null $UF
 * @property int|null $IBGE
 * @property string|null $Email
 * @property string|null $Desc_carreira
 * @property int|null $tem_clinica
 * @property string|null $Imagem
 * @property string|null $site
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $destaque
 * @property int $status
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CRM'], 'required'],
            [['IBGE', 'tem_clinica', 'destaque', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['CRM'], 'string', 'max' => 18],
            [['Nome', 'Email'], 'string', 'max' => 80],
            [['Telefone'], 'string', 'max' => 15],
            [['Endereco', 'Cidade', 'Imagem', 'site'], 'string', 'max' => 145],
            [['Bairro'], 'string', 'max' => 60],
            [['UF'], 'string', 'max' => 2],
            [['Desc_carreira'], 'string', 'max' => 500],
            [['CRM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'CRM' => Yii::t('app', 'Crm'),
            'Nome' => Yii::t('app', 'Nome'),
            'Telefone' => Yii::t('app', 'Telefone'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'Cidade' => Yii::t('app', 'Cidade'),
            'UF' => Yii::t('app', 'Uf'),
            'IBGE' => Yii::t('app', 'Ibge'),
            'Email' => Yii::t('app', 'Email'),
            'Desc_carreira' => Yii::t('app', 'Desc Carreira'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'site' => Yii::t('app', 'Site'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'destaque' => Yii::t('app', 'Destaque'),
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
        return $this->hasMany(MedicoHasEspecialidade::className(), ['Medico_id' => 'Medico_id']);
    }

}
