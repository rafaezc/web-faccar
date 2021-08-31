<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidade */

$this->title = $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medico Has Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medico-has-especialidade-view">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'Medico_id' => $model->Medico_id, 'Especialidade_id' => $model->Especialidade_id, 'Clinica_id' => $model->Clinica_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'Medico_id' => $model->Medico_id, 'Especialidade_id' => $model->Especialidade_id, 'Clinica_id' => $model->Clinica_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post'
                ]
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'Medico_id',
                'Especialidade_id',
                'Clinica_id',
                'criado_em',
                'atualizado_em',
                'status'
            ]
        ]) ?>

    </div>
</div>
