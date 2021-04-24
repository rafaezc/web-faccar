<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $CRM
 * @property string|null $Nome
 * @property int|null $Telefone
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property int|null $IBGE
 * @property string|null $Email
 * @property int|null $tem_clinica
 * @property string|null $Imagem
 * @property string|null $site
 * @property string $criado_em
 * @property string|null $atualizado_em
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
            [['CRM', 'criado_em', 'status'], 'required'],
            [['Telefone', 'IBGE', 'tem_clinica', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['CRM'], 'string', 'max' => 18],
            [['Nome', 'Email'], 'string', 'max' => 80],
            [['Endereco', 'Imagem', 'site'], 'string', 'max' => 145],
            [['Bairro'], 'string', 'max' => 60],
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
            'IBGE' => Yii::t('app', 'Ibge'),
            'Email' => Yii::t('app', 'Email'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'site' => Yii::t('app', 'Site'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
