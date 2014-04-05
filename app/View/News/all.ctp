<?php
//$this->Paginator->options(array(
//    'update' => '#paginado',
//    'evalScripts' => true));
//?>

<?php $this->Paginator->options(array(
    'update' => '#paginado',
    'evalScripts' => true,
    'before' => $this->Js->get('#busy-indicator')->effect(
            'fadeIn',
            array('buffer' => false)
        ),
    'complete' => $this->Js->get('#busy-indicator')->effect(
            'fadeOut',
            array('buffer' => false)
        ),
)); ?>
<script type="text/javascript">
    $('body').delegate('.ajax-pagination a', 'click', function() {
        $this = $(this);
        $this.parents('div.ajax-response').filter(':first').block();
        pageUrl = $this.attr('href');
        $.get(pageUrl, function(data) {
            $this.parents('div.ajax-response').filter(':first').html(data);
        });
        return false;
    });
</script>

<!--  Listado de noticias  -->

<div style="margin-top: 150px" id="paginado">
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

        <!--paginado-->

        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <ul class="pagination pagination-large pagination-centered">
                <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                ?>
            </ul>
        </div>
        <div class="col-md-4">

        </div>





    <?php } else {
        echo "No News found.";
    } ?>

</div>

<?php echo $this->Js->writeBuffer(); ?>