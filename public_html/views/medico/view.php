<?php

use yii\helpers\Url;
use Da\QrCode\QrCode;
/* @var $this yii\web\View */

$this->title = "Card Dr. {$medico->Nome}";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?php echo $medico->Imagem ?>" alt="<?php echo $medico->Nome ?>" class="img-responsive img-circle">
        </div>
        <div class="col-md-8">
            <h1><?php echo $medico->Nome ?></h1>
            <p>Texto aleatorio dmksfdsmklfjmfklsdogjmnklcxvfjoiadsjfio</p>
            <div class="col-md-6">
                <h2>Dados</h2>
                <ul>
                    <li><?php echo $medico->CRM ?></li>
                    <li><?php echo $medico->Email ?></li>
                    <li><?php echo $medico->Endereco ?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Clinicas</h2>
                <ul>
                <?php foreach($medico->medicoHasEspecialidade as $key => $clinica): ?>
                    <?php $auxClinica[$clinica->clinica->Clinica_id]['Nome'] = $clinica->clinica->Nome ?>
                    <?php $auxClinica[$clinica->clinica->Clinica_id]['Id'] = $clinica->clinica->Clinica_id ?>
                <?php endforeach; ?>
                <?php foreach($auxClinica as $key => $clinica): ?>
                    <li><?= $clinica['Nome'] ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <img src="<?=$qrCode->writeDataUri() ?>" class="img-responsive">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <h2>Especialidades</h2>
    </div>
    <?php foreach($medico->medicoHasEspecialidade as $key => $especilidade): ?>
    <div class="col-lg-3">
        <img src="<?php echo $especilidade->especialidade->Imagem ?>" class="img-responsive" alt="<?php echo $especilidade->especialidade->Titulo ?>">
        <h2><?php echo $especilidade->especialidade->Titulo ?></h2>
        <?php echo $especilidade->especialidade->SubTitulo ?>
        <p><a href="<?= Url::to('especialidade/view') ?>" class="btn btn-primary" role="button">Ver Detalhes >></a></p>
    </div>
    <?php if((++$key > 0) and ($key % 4 == 0)): ?>
    </div>
    <hr>
    <div class="row">
    <?php endif; ?>
    <?php endforeach; ?>
</div>