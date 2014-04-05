<?php

$options = array(
    'class' => 'btn btn-primary'
);


echo $this->Form->create('Author', array(
        'inputDefaults' => array(
            'class' => 'form-control',
            'div' => 'form-group'
        )),
    array(
        'action' => 'admin_add'
    )
);
?>
<legend>Editar autor</legend>

<?php
echo $this->Form->input('nick');
echo $this->Form->input('mail');
echo $this->Form->input('fb');
echo $this->Form->input('twitter');
echo $this->Form->end($options);
?>


