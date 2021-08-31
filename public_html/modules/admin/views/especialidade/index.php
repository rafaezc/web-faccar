<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\EspecialidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especialidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especialidade-index">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Especialidade', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'attribute' => 'Especialidade_id',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Titulo',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Título'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'SubTitulo',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Sub-título'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                ['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Especialidade_id',
                    'filter' => '0',
                    'filterOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'headerOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'label' => '',
                    'contentOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                ],
                // Não apagar atributo acima. Importante para simetria.

                //'Especialidade_id',
                //'Titulo',
                //'SubTitulo',
                //'Texto:ntext',
                //'Imagem',
                //'criado_em',
                //'atualizado_em',
                //'status',

            ]
        ]); ?>

        <?php Pjax::end(); ?>
    
    </div>
</div>
