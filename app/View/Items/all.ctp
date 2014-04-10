
    <div class="container row show-grid" style="background-color: rgba(0, 0, 0, 0.75); padding-top: 10px;">
        <?php foreach ($items as $item) { ?>
            <div style="margin-top: 100px;"  class="col-md-2">
                <a href="#" id="item_<?php echo $item['Items']['id'] ?>">
                    <img src="http://placehold.it/140x140" class="img-rounded" style="width: 100px; height: 100px">

                    <div class="caption">
                        <h3><?php echo $item['Items']['name'] ?></h3>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>



<script type="text/javascript">
    <?php foreach ($items as $item) { ?>
    $("#item_<?php echo $item['Items']['id']; ?>").on('click', function () {
        new Messi("<?php echo $item['Items']['description']; ?>"
            , {title: "<?php echo $item['Items']['name']; ?>"
            , modal: true});
    });
    <?php }?>
</script>
