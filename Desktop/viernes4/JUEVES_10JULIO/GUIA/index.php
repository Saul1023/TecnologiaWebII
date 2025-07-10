<?php
require_once "Library.php";

$library = new Library;
$aut1 = new Author("Juanito");
$aut2 = new Author("Maria");
$book1 = new Book("Libro1", "A1",$aut1);
$book2 = new Book("Libro2","A2",$aut2);
$book3 = new Book("Mosquetero","000",$aut2);
$book4 = new Book("LA VUELTA","001",$aut1);
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);
$library->printBooks();
//buscar
$bookSearch = readline("Libro a buscar: ");
$result = $library->search($bookSearch);
if($result){
    print($result."\n");
}else{
    print("No se encontro \n");
}
//buscar
$bookRemove = readline("Libro a eliminar: ");
if($library->removeBookByteTitle($bookRemove)){
    print("Libro eliminado \n");
}else{
    print("No encontrado \n");
}
//mostrar de nuevo
print("\n");
$library->printBooks();
