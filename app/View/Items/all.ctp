<?php //foreach ($items as $item): ?>
<!---->
<!--    <div class="panel panel-default noticias-body">-->
<!--        <div class="panel-heading noticias-heading">-->
<!--            <h3 class="panel-title">--><?php //echo $item['Items']['name'] ?><!--</h3>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--            <div class="row">-->
<!--                <div class="col-md-2">-->
<!--                    <img src="http://placehold.it/140x140" class="img-rounded" style="width: 100px; height: 100px">-->
<!--                </div>-->
<!--                <div class="col-md-10">-->
<!--                    <p>--><?php //echo $item['Items']['description'] ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <hr>-->
<!---->
<?php //endforeach ?>

<a href="#">
<div class="row show-grid">
    <?php foreach ($items as $item) { ?>
        <div class="col-md-2">
            <img src="http://placehold.it/140x140" class="img-rounded" style="width: 100px; height: 100px">
            <div class="caption">
                <h3><?php echo $item['Items']['name'] ?></h3>
            </div>
        </div>
    <?php } ?>
</div>
</a>
<!--    <div class="col-md-2">.col-md-2</div>-->
