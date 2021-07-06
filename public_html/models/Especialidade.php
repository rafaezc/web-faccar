<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Especialidade".
 *
 * @property int $Especialidade_id
 * @property string $Titulo
 * @property string|null $SubTitulo
 * @property string|null $Texto
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 */
class Especialidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Especialidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Titulo'], 'required'],
            [['Texto'], 'string'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['status'], 'integer'],
            [['Titulo'], 'string', 'max' => 60],
            [['SubTitulo'], 'string', 'max' => 250],
            [['Imagem'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Especialidade_id' => Yii::t('app', 'Especialidade ID'),
            'Titulo' => Yii::t('app', 'Titulo'),
            'SubTitulo' => Yii::t('app', 'Sub-Titulo'),
            'Texto' => Yii::t('app', 'Texto'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
