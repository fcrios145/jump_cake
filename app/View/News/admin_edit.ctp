
    <?php

    $options = array(
        'class' => 'btn btn-primary'
    );


    echo $this->Form->create('News', array(
            'inputDefaults' => array(
                'class' => 'form-control',
                'div' => 'form-group'
            )),
        array(
            'action' => 'admin_edit'
        )
    );
    ?>
    <legend>Nueva noticia</legend>

    <?php
    echo $this->Form->input('titulo');
    echo $this->Form->input('body', array('rows' => '8'));
    echo $this->Form->input('author_id');
    echo $this->Form->end($options);
    ?>

