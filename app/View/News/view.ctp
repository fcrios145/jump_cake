<div class="row" style="text-align: justify; margin-bottom: 20px; background-color: rgba(0, 0, 0, 0.75)">
    <div class="container">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $news['News']['titulo'] ?></h2>

                <p class="blog-post-meta"><?php echo $news['News']['created'] ?><a
                        href="#"><?php echo $news['Author']['nick'] ?></a></p>

                <p style="font-size: 20px"><?php echo $news['News']['body'] ?></p>

            </div>
        </div>
        <div class="col-sm-4">

<!--            --><?php
//            if ($this->Session->read('Auth.User')){
//                $options = array(
//                    'class' => 'btn btn-primary'
//                );
//
//
//                echo $this->Form->create('Comment', array(
//                        'inputDefaults' => array(
//                            'class' => 'form-control',
//                            'div' => 'form-group'
//                        )),
//                    array(
//                        'action' => 'add'
//                    )
//                );
//                ?>
<!--                <legend style="color: #ffffff">Nuevo comentario</legend>-->
<!---->
<!--                --><?php
//                echo $this->Form->input('text', array('rows' => '8'));
//                echo $this->Form->end($options);
//            }
//            ?>
        </div>
    </div>


    <hr/>
    <div class="container">
            <div class="col-md-6">
                <?php
                if ($this->Session->read('Auth.User')){
                    $options = array(
                        'class' => 'btn btn-primary'
                    );


                    echo $this->Form->create('Comment', array(
                            'inputDefaults' => array(
                                'class' => 'form-control',
                                'div' => 'form-group'
                            )),
                        array(
                            'action' => 'add'
                        )
                    );
                    ?>
                    <legend style="color: #ffffff;">Nuevo comentario</legend>

                    <?php
                    echo $this->Form->input('text', array('rows' => '7'));
                    echo $this->Form->end($options);
                }
                ?>
            </div>

    </div>
    <hr/>




    <?php if ($comentarios) { ?>  <!--    Comentarios-->
        <?php foreach ($comentarios as $comentario) { ?>
            <div class="container">
                <div class="col-md-10">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <!--                    --><?php //echo $this->Html->image('avatar.gif', array('alt' => 'thedead', 'id' => 'logo'));     ?>
                            <img src="http://placehold.it/140x140" class="img-rounded" style="width: 100px; height: 100px">
                            <!--                    <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">-->
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $comentario['User']['username'] ?></h4>
                            <?php echo $comentario['Comment']['text'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
        <?php } ?>
    <?php } ?>

</div>


