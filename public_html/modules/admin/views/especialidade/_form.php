<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Especialidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especialidade-form">
    <div class="container">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'SubTitulo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Texto')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'Imagem')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
