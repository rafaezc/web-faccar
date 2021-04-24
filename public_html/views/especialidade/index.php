<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = "Epecialidades";
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Especialidades</h1>
<p class="text-description">
    A medida que a tecnologia e o conhecimento médico evoluíram no século XX, o exercício da medicina seguiu por um caminho sem volta de fragmentação. 
    A figura do médico generalista, também chamado de clínico geral, que atuava de forma mais abrangente deixou de existir.
    Um médico especialista é capaz de atender pacientes com problemas nas áreas em que se especializou. 
    Nesse sentido, ele consegue diagnosticar as diversas doenças que podem se apresentar nessas situações e indicar os melhores tratamentos para os problemas apresentados, 
    bem como recomendar medidas profiláticas para evitar que as doenças se manifestem.
</p>
<hr>
<div class="row">
    <?php foreach ($Vmodel as $key => $linha):?>
        <div class="col-lg-4">
            <img src="<?php echo $linha->Imagem?>" class="img-responsive" alt="<?php echo $linha->Titulo?>">
            <h2><?php echo $linha->Titulo?></h2>
            <p class="text-description"><?php echo $linha->SubTitulo?></p>
            <p><a class="btn btn-primary" href="<?php echo Url::to('especialidades/view')?>" role="button">Ver Detalhes »</a></p>
        </div>
        <?php if((++$key > 0)  and ($key % 3 == 0)):?>
            </div>
            <hr>  
            <div class="row">
        <?php endif;?>
    <?php endforeach;?>
</div>
<hr>
