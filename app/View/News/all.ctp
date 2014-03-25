<h1 id="noticias">Noticias</h1>

<?php foreach ($news as $noticia): ?>

    <div class="panel panel-default noticias-body">
        <div class="panel-heading noticias-heading">
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
        <div class="panel-footer text-right noticias-footer">
            <small>Autor: </small><?php echo $noticia['Author']['nick'] ?>
        </div>
    </div>
    <hr>

<?php endforeach ?>

<!--Fin noticias recientes-->
