<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = "Médicos";
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Médicos</h1>
<p class="text-description">Nessa página você encontrará os melhores médicos em sua região.
</p>
<hr>
<div class="row">
    <?php foreach ($medicos as $key => $linha): ?>
        <div class="col-lg-4">
            <img src="<?php echo $linha->Imagem; ?>" class="img-responsive" alt="<?php echo $linha->Nome; ?>">
            <h2><?php echo $linha->Nome; ?></h2>
            <p>
                CRM: <?php echo $linha->CRM; ?> <br />
                Telefone: <?php echo $linha->Telefone; ?> <br />
                E-mail: <?php echo $linha->Email; ?> <br />
            </p>
            <p>
                <a class="btn btn-primary" href="<?php echo Url::toRoute(['medico/view', 'id' => $linha->Medico_id]) ?>" role="button">
                    Ver Detalhes »
                </a>
            </p>
        </div>
        <?php if((++$key > 0)  and ($key % 3 == 0)): ?>
            </div>
            <hr>  
            <div class="row">
        <?php endif;?>
    <?php endforeach; ?>
</div>
<hr>