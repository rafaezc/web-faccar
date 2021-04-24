<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;

?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide img-responsive" src="/img/hero-bg.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Bem Vindo ao Cadê meu Médico.</h1>
                    <p>Encontre seu médico e/ou a Especialidade Desjada Aqui.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="/img/gallery/gallery-1.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-md-4">
            <img src="/img/gallery/gallery-2.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-md-4">
            <img src="/img/gallery/gallery-3.jpg" alt="" class="img-responsive">
        </div>
    </div>  
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img src="/img/gallery/gallery-4.jpg" alt="" class="img-responsive">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-lg-4 text-center">
            <img class="img-circle" src="/img/doctors/doctors-1.jpg" alt="Generic placeholder image" width="240" height="240">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="img-circle" src="/img/doctors/doctors-2.jpg" alt="Generic placeholder image" width="240" height="240">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4 text-center">
            <img class="img-circle" src="/img/doctors/doctors-3.jpg" alt="Generic placeholder image" width="240" height="240">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
    </div>
    <hr class="featurette-divider">
</div>