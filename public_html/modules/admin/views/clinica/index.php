<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ClinicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clinicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinica-index">
    <div class="container">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Clinica', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'attribute' => 'Clinica_id',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Nome',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Nome'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Telefone',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Telefone'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Email',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'E-mail',
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Endereco',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Endereço'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Bairro',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Bairro'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'CEP',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'CEP'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Cidade',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'Cidade'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'UF',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'UF'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                ['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Clinica_id',
                    'filter' => '0',
                    'filterOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'headerOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'label' => '',
                    'contentOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                ] 
                // Não apagar atributo acima. Importante para simetria.

                //'Clinica_id',
                //'Nome',
                //'Telefone',
                //'Endereco',
                //'Bairro',
                //'Cidade',
                //'UF',
                //'CEP',
                //'IBGE',
                //'Email:email',
                //'Desc',
                //'Imagem',
                //'criado_em',
                //'atualizado_em',
                //'status',

            ]
        ]); ?>

        <?php Pjax::end(); ?>
    
    </div>
</div>
