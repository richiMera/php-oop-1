<?php

class Book {
    public $title;
    public $author;
    
    function __construct($title, $author) {
        return $this->title = $title;
        return $this->author = $author;
    }

}