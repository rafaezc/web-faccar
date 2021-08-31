<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$this->title = 'Update Medico: ' . $model->Medico_id;
$this->params['breadcrumbs'][] = ['label' => 'Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Medico_id, 'url' => ['view', 'id' => $model->Medico_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medico-update">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model
        ]) ?>

    </div>
</div>
