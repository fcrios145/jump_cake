<?php

class Comment extends AppModel {
    public $belongsTo = array(
        'News',
        'User'
    );
}

?>