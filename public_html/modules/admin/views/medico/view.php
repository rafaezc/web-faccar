<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$this->title = $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Medico_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Medico_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Medico_id',
            'CRM',
            'Nome',
            'Telefone',
            'Endereco',
            'Bairro',
            'Cidade',
            'UF',
            'IBGE',
            'Email:email',
            'Desc_carreira',
            'tem_clinica',
            'Imagem',
            'site',
            'criado_em',
            'atualizado_em',
            'destaque',
            'status',
        ],
    ]) ?>

</div>
