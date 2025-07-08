/*
Modificadores de acceso
    publico-> Visible para todos
    private-> Visible solo dentro de la clase
    protected-> Private mas herencia
*/

<?php
    class Car{
        //propiedades o atributos
        private $color = "Verde";
        public $traccion = "4wd";
        //metodos
        public function getInfo(){
            return "Color: $this->color, Traccion:$this->traccion \n";
        }
    }
    $toyota = new Car();
    $toyota->color = "azul";
    $toyota->traccion = "Simple";
    echo $toyota->getInfo()."\n";
    $mercedes = new Car();
    $mercedes->color = "amarillo";
    //$mercedes->traccion = "Doble";
    echo $mercedes->getInfo()."\n";

