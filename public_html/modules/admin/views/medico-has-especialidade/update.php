<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidade */

$this->title = 'Update Medico Has Especialidade: ' . $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medico Has Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Medico_id, 'url' => ['view', 'Medico_id' => $model->Medico_id, 'Especialidade_id' => $model->Especialidade_id, 'Clinica_id' => $model->Clinica_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medico-has-especialidade-update">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model
        ]) ?>

    </div>
</div>
