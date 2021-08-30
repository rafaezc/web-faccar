<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">
    <div class="container">
    
        <h1><?= Html::encode($this->title) ?></h1>
    
        <p>
            <?= Html::a('Create Medico', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'label' => 'ID'
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'CRM',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'CRM'
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
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Email',
                    // 'headerOptions' => ['class' => 'text-center'],
                    'label' => 'E-mail',
                    // 'contentOptions' => ['style' => 'width: 30px;', 'class' => 'text-center'],
                ],
                //'Medico_id',
                //'CRM',
                //'Nome',
                //'Telefone',
                //'Endereco',
                //'Bairro',
                //'Cidade',
                //'UF',
                //'IBGE',
                //'Email:email',
                //'Desc_carreira',
                //'tem_clinica',
                //'Imagem',
                //'site',
                //'criado_em',
                //'atualizado_em',
                //'destaque',
                //'status',

                ['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'Medico_id',
                    'filter' => '0',
                    'filterOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'headerOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white; background: white;'],
                    'label' => '',
                    'contentOptions' => ['style' => 'color: transparent; width: 30px; border: 1px solid white;; background: white;'],
                ] 
                // Não apagar atributo acima. Importante para simetria.
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
