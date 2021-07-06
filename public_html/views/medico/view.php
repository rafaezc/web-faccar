<?php

use yii\helpers\Url;
use Da\QrCode\QrCode;
/* @var $this yii\web\View */

$this->title = "Card Dr. {$medico->Nome}";
$this->params['breadcrumbs'][] = $this->title; //--cadastrar mais 2 médicos--//
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?php echo $medico->Imagem ?>" alt="<?php echo $medico->Nome ?>" class="img-responsive img-circle">
        </div>
        <div class="col-md-8">
            <h1><?php echo $medico->Nome ?></h1>
            <p><?php echo $medico->Desc_carreira ?></p>
            <div class="col-md-12">
                <h2>Dados</h2>
                <ul>
                <?php foreach($medico->medicoHasEspecialidade as $key => $especialidade): ?>
                    <?php $auxEsp[$especialidade->especialidade->Especialidade_id]['Titulo'] = $especialidade->especialidade->Titulo ?>
                    <?php $auxEsp[$especialidade->especialidade->Especialidade_id]['Id'] = $especialidade->especialidade->Especialidade_id ?>
                <?php endforeach; ?>
                <?php $espDeCadaMed = []; ?>
                <?php foreach($auxEsp as $key => $especialidade): ?>
                    <?php array_push($espDeCadaMed, $especialidade['Titulo']) ?>
                <?php endforeach; ?>
                <?php if (count($espDeCadaMed) > 1): ?>
                    <?php $espDeCadaMedString = strtolower(implode(', ', $espDeCadaMed)) ?>
                    <?php $pos = strrpos($espDeCadaMedString, ',') ?>
                        <?php if ($pos): { ?>
                            <?php $newstring = substr_replace($espDeCadaMedString, ' e', $pos, strlen(',')); ?>
                            <li><?php echo 'Especialista em '.$newstring ?></li>
                       <?php } ?>
                       <?php endif; ?>
                <?php else: ?>
                    <li><?php echo 'Especialista em '.strtolower($especialidade['Titulo']) ?></li>
                <?php endif; ?>
                    <li><?php echo 'CRM '. implode('/', explode(' ', $medico->CRM)) ?></li>
                    <li><?php echo $medico->Email ?></li>
                    <li><?php echo $medico->Endereco.' - '.$medico->Bairro ?></li>
                    <li><?php echo $medico->Cidade.' - '. explode(' ', $medico->CRM)[1] ?></li> 
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
        <h2>Clínicas</h2>
    </div>
    <?php foreach($medico->medicoHasEspecialidade as $key => $clinica): ?>
        <?php $auxCli[$clinica->clinica->Clinica_id]['Nome'] = $clinica->clinica->Nome ?>
        <?php $auxCli[$clinica->clinica->Clinica_id]['Id'] = $clinica->clinica->Clinica_id ?>
        <?php $auxCli[$clinica->clinica->Clinica_id]['Imagem'] = $clinica->clinica->Imagem ?>
        <?php $auxCli[$clinica->clinica->Clinica_id]['Desc'] = $clinica->clinica->Desc ?>
    <?php endforeach; ?>
        <?php foreach($auxCli as $key => $clinica): ?>
        <?php if (count($auxCli) < 3 || count($auxCli) % 3 == 0): ?>
            <?php $colSize = 4 ?>
        <?php elseif (count($auxCli) % 4 == 0 || (count($auxCli) % 3 == 0) && count($auxCli) % 4 == 0) : ?>
            <?php $colSize = 3 ?>
        <?php endif; ?>
    <div class="<?php echo 'col-lg-'.$colSize ?>">
        <img src="<?php echo $clinica['Imagem'] ?>" class="img-responsive" alt="<?php $clinica['Nome'] ?>">
        <h2><?php echo $clinica['Nome'] ?></h2>
        <?php echo $clinica['Desc'] ?>
        <p><a href="<?= Url::to('clinica/view') ?>" class="btn btn-primary" role="button">Ver Detalhes >></a></p>
    </div>
    <?php if((++$key > 0) && ($key % ($key + 1) == 0)): ?>
    </div>
    <hr>
    <div class="row">
    <?php endif; ?>
    <?php endforeach; ?>
</div>