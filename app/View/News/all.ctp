<!--  Listado de noticias  -->
<?php $paginator = $this->Paginator; ?>

<?php if ($datas) { ?>

    <h1 id="noticias">Noticias</h1>
    <?php foreach ($datas as $noticia): ?>

        <div class="panel panel-default noticias-body">
            <div class="panel-heading noticias-heading">
                <h3 class="panel-title"><?php
                    echo $this->Html->link(
                        $noticia['News']['titulo'],
                        array('action' => 'view', $noticia['News']['id'])
                    );
                    ?></h3>
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
                <small>Autor:</small><?php echo $noticia['Author']['nick'] ?>
            </div>
        </div>
        <hr>

    <?php endforeach ?>

    <?php echo $paginator->first("First"); ?>

    <?php
    // 'prev' page button,
    // we can check using the paginator hasPrev() method if there's a previous page
    // save with the 'next' page button
    if ($paginator->hasPrev()) {
        echo $paginator->prev("Prev");
    }
    ?>

    <?php
    // the 'number' page buttons
    echo $paginator->numbers(array('modulus' => 2));
    ?>
p

    <?php
    // for the 'next' button
    if ($paginator->hasNext()) {
        echo $paginator->next("Next");
    }
    ?>

    <?php
    // the 'last' page button
    echo $paginator->last("Last");
    ?>

<?php
} else {
    echo "No users found.";
} ?>