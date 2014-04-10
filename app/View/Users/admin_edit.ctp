
    <?php

    $options = array(
        'class' => 'btn btn-primary'
    );


    echo $this->Form->create('Comment', array(
            'inputDefaults' => array(
                'class' => 'form-control',
                'div' => 'form-group'
            )),
        array(
            'action' => 'admin_edit'
        )
    );
    ?>
    <legend>Editar comentario</legend>

    <?php
    echo $this->Form->input('text', array('rows' => '8'));
    echo $this->Form->input('user_id');
    echo $this->Form->input('news_id');
    echo $this->Form->end($options);
    ?>

