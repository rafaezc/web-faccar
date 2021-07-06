<?php

use yii\helpers\Url;
use Da\QrCode\QrCode;
/* @var $this yii\web\View */

$this->title = "Card {$clinica->Nome}";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?php echo $clinica->Imagem ?>" alt="<?php echo $clinica->Nome ?>" class="img-responsive">
        </div>
        <div class="col-md-8">
            <h1><?php echo $clinica->Nome ?></h1>
            <p><?php echo $clinica->Desc ?></p>
            <div class="col-md-12">
                <h2>Dados</h2>
                <ul>
                <?php foreach($clinica->medicoHasEspecialidade as $key => $especialidade): ?>
                    <?php $auxCli[$especialidade->especialidade->Especialidade_id]['Titulo'] = $especialidade->especialidade->Titulo ?>
                    <?php $auxCli[$especialidade->especialidade->Especialidade_id]['Id'] = $especialidade->especialidade->Especialidade_id ?>
                <?php endforeach; ?>
                <?php $espDeCadaCli = []; ?>
                <?php foreach($auxCli as $key => $especialidade): ?>
                    <?php array_push($espDeCadaCli, $especialidade['Titulo']) ?>
                <?php endforeach; ?>
                <?php if (count($espDeCadaCli) > 1): ?>
                    <?php $espDeCadaCliString = strtolower(implode(', ', $espDeCadaCli)) ?>
                    <?php $pos = strrpos($espDeCadaCliString, ',') ?>
                        <?php if ($pos): { ?>
                            <?php $newstring = substr_replace($espDeCadaCliString, ' e', $pos, strlen(',')); ?>
                            <li><?php echo 'Clínica especializada em '.$newstring ?></li>
                       <?php } ?>
                       <?php endif; ?>
                <?php else: ?>
                    <li><?php echo 'Clínica especializada em '.strtolower($especialidade['Titulo']) ?></li>
                <?php endif; ?>
                    <li><?php echo $clinica->Telefone ?></li>
                    <li><?php echo $clinica->Email ?></li>
                    <li><?php echo $clinica->Endereco.' - '.$clinica->Bairro ?></li>
                    <li><?php echo $clinica->Cidade.' - '.$clinica->UF ?></li> 
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
        <h2>Médicos</h2>
    </div>
    <?php foreach($clinica->medicoHasEspecialidade as $key => $medico): ?>
        <?php $auxMed[$medico->medico->Medico_id]['Nome'] = $medico->medico->Nome ?>
        <?php $auxMed[$medico->medico->Medico_id]['Id'] = $medico->medico->Medico_id ?>
        <?php $auxMed[$medico->medico->Medico_id]['Imagem'] = $medico->medico->Imagem ?>
        <?php $auxMed[$medico->medico->Medico_id]['Desc_carreira'] = $medico->medico->Desc_carreira ?>
    <?php endforeach; ?>
        <?php foreach($auxMed as $key => $medico): ?>
        <?php if (count($auxMed) < 3 || count($auxMed) % 3 == 0): ?>
            <?php $colSize = 4 ?>
        <?php elseif (count($auxMed) % 4 == 0 || (count($auxMed) % 3 == 0 && count($auxMed) % 4 == 0)): ?>
            <?php $colSize = 3 ?>
        <?php endif; ?>
    <div class="<?php echo 'col-lg-'.$colSize ?>">
        <img src="<?php echo $medico['Imagem'] ?>" class="img-responsive img-circle" alt="<?php $medico['Nome'] ?>">
        <h2><?php echo $medico['Nome'] ?></h2>
        <?php echo $medico['Desc_carreira'] ?>
        <p><a href="<?= Url::to('medico/view') ?>" class="btn btn-primary" role="button">Ver Detalhes >></a></p>
    </div>
    <?php if((++$key > 0) && ($key % ($key + 1) == 0)): ?>
    </div>
    <hr>
    <div class="row">
    <?php endif; ?>
    <?php endforeach; ?>
</div>