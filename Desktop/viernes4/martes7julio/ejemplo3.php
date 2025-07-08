/*
Constructor, es una funcion especial que se ejecuta automaticamente al momento de crear un objeto, es una 
funcion publica que indica con dos guiones bajos __ y luego
la palabra reservada construct
*/

<?php
    class Car{
        private $marca="";
        
        public function __construct($marca=null){
            if($marca)
                $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }
        
        public function setMarca($marca){
            $this->marca = $marca;
        }

    }
    $toyota = new Car("TOYOTA");
    echo "Marca: ".$toyota->getMarca()."\n";