/*
Modificadores de acceso
    publico->--- NO se debe usar para las propiedades, las propiedades deben ser private
    La forma correcta de acceder a las propiedades es por:
        GETTERS - SETters
*/

<?php
    class Car{
        //propiedades o atributos
        private $marca;
        
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
    }
    $toyota = new Car();
    $toyota->setMarca("TOYOTA");
    echo "Marca del auto: ".$toyota->getMarca()."\n";