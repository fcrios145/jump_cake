<?php

class News extends AppModel {
    public $belongsTo= 'Author';
    public $hasMany = 'Comment';
}

?>