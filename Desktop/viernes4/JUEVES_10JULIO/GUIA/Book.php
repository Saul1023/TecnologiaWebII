<?php
class Book{
    private string $title;
    private string $code;
    private Author $author;

    public function __construct($title, $code, $author){
        $this->title = $title;
        $this->code = $code;
        $this->author = $author;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getCode(){
        return $this->code;
    }
    public function setCode($code){
        $this->code = $code;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function __toString(){
        return "[CODIGO: $this->code, TITULO: $this->title, AUTOR: $this->author]";
    }
}