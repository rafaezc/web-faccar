<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidade */

$this->title = 'Create Medico Has Especialidade';
$this->params['breadcrumbs'][] = ['label' => 'Medico Has Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-has-especialidade-create">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model
        ]) ?>

    </div>
</div>
