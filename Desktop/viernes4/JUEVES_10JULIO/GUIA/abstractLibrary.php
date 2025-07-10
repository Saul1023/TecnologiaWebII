<?php
abstract class abstractLibrary{
    protected $books = [];
    abstract public function addBook(Book $book);
    abstract public function removeBookByteTitle(string $bookName);
    abstract public function search(string $bookName);
    abstract public function printBooks();
}