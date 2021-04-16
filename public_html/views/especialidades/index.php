<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Especialidades</h1>

<?php $form = ActiveForm::begin();?>
<?php echo $form->errorSummary($Vmodel);?>

    <?= $form->field($Vmodel, 'Titulo');?>
    <?= $form->field($Vmodel, 'SubTitulo');?>
    <?= $form->field($Vmodel, 'Texto')->textArea(['rows' => '4']);?>
    <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']);?>

<?php ActiveForm::end();?>