<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MedicoHasEspecialidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medico Has Especialidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-has-especialidade-index">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Medico Has Especialidade', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                // ['class' => 'yii\grid\SerialColumn'],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Medico_id',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Médico_ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Especialidade_id',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Especialidade_ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Clinica_id',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Clinica_ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                ['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Medico_id',
                    'filter' => '0',
                    'filterOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'headerOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'label' => '',
                    'contentOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                ],
                // Não apagar atributo acima. Importante para simetria.

                //'Medico_id',
                //'Especialidade_id',
                //'Clinica_id',
                //'criado_em',
                //'atualizado_em',
                //'status',

            ]
        ]); ?>

        <?php Pjax::end(); ?>
    
    </div>
</div>
