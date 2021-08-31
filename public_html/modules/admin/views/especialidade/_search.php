<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\EspecialidadeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especialidade-search">
    <div class="container">

        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>

        <?= $form->field($model, 'Especialidade_id') ?>

        <?= $form->field($model, 'Titulo') ?>

        <?= $form->field($model, 'SubTitulo') ?>

        <?= $form->field($model, 'Texto') ?>

        <?= $form->field($model, 'Imagem') ?>

        <?php // echo $form->field($model, 'criado_em') ?>

        <?php // echo $form->field($model, 'atualizado_em') ?>

        <?php // echo $form->field($model, 'status') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
