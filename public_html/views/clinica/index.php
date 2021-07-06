<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = "Clínicas";
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Clínicas</h1>
<p class="text-description">Nessa página você encontrará as melhores clínicas em sua região.
</p>
<hr>
<div class="row">
    <?php foreach ($clinicas as $key => $linha):?>
        <div class="col-lg-4">
            <img src="<?php echo $linha->Imagem; ?>" class="img-responsive" alt="<?php echo $linha->Nome; ?>">
            <h2><?php echo $linha->Nome; ?></h2>
            <p>
                Telefone: <?php echo $linha->Telefone; ?> <br />
                <?php if(!empty($linha->Email)) { 
                    echo 'Email: ' . $linha->Email . '<br />';
                } ?> 
                Endereço: <?php echo $linha->Endereco; ?> - <?php echo $linha->Bairro; ?> <br />
                Cidade: <?php echo $linha->Cidade; ?> - <?php echo $linha->UF; ?> - <?php echo $linha->CEP; ?>     
            </p>
            <p>
                <a class="btn btn-primary" href="<?php echo Url::toRoute(['clinica/view', 'id' => $linha->Clinica_id]) ?>" role="button">
                    Ver Detalhes »
                </a>
            </p>
        </div>
        <?php if((++$key > 0)  and ($key % 3 == 0)):?>
            </div>
            <hr>  
            <div class="row">
        <?php endif;?>
    <?php endforeach; ?>
</div>
<hr>

