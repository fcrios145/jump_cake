

<?php

$options = array(
    'class' => 'btn btn-primary'
);


echo $this->Form->create('Items', array(
        'inputDefaults' => array(
            'class' => 'form-control',
            'div' => 'form-group'
        )),
    array(
        'action' => 'admin_edit'
    )
);
?>
<legend>Nuevo item</legend>

<?php
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '8'));
echo $this->Form->input('img',array('type'=>'file'));
echo $this->Form->input('type_id');
echo $this->Form->end($options);
?>


