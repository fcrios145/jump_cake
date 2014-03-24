<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="/assets/example/bg_suburb.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Bootstrap 3 Carousel Layout</h1>
                    <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""><p></p>
                    <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
                    </p></pthis></div>
            </div>
        </div>
        <div class="item">
            <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Changes to the Grid</h1>
                    <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                    <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: transparent"></div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>

<!--Fin carrusel-->



<!--Pequeña descripcion del juego-->

<div class="jumbotron">
    <div class="container">
        <h1>Que esperas!</h1>
        <p>Adentrate en el mundo donde los muertos ya no son lo que eran antes, vive las mejores aventuras con tus mejores amigos y comparte tus avances en las redes sociales</p>
        <p>
            <a class="btn btn-primary btn-lg">Jugar</a>
        </p>
    </div>
</div>

<!--Fin pequeña descripcion del juego-->






<!--Noticias Recientes-->

<h1 id="noticias">Noticias recientes</h1>

<?php foreach ($news as $noticia): ?>

    <div class="panel panel-default" style="margin-left: 15px; margin-right: 15px">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $noticia['News']['titulo'] ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="http://placehold.it/140x140" class="img-rounded" style="width: 100px; height: 100px">
                </div>
                <div class="col-md-10">
                    <p><?php echo $noticia['News']['body'] ?></p>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <small>Autor: </small><?php echo $noticia['Author']['nick'] ?>
        </div>
    </div>
    <hr>

<?php endforeach ?>

<!--Fin noticias recientes-->

