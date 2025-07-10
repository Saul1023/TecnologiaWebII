<?php
require_once "Book.php";
require_once "abstractLibrary.php";
require_once "Author.php";
class Library extends abstractLibrary{
    public function addBook(Book $book){
        $this->books[]=$book;
    }
    public function removeBookByteTitle(string $bookName){
        foreach ($this->books as $key => $b){
                if ($b->getTitle() == $bookName){
                    unset($this->books[$key]);
                    return true;
            }
        }
        return false;  
    }
    public function search(string $bookName){
        foreach ($this->books as $key => $b){
            if ($b->getTitle() == $bookName){
                return $b;
        }
    }
    return null;
    }
    public function printBooks(){
        foreach ($this->books as $key => $b){
            print($b."\n");
        }
    }
}