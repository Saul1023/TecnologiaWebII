<?php
class Author {
    public string $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function __toString(){
        return $this->name;
    }
}