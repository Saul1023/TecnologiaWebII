<?php

require_once "src/Car.php";

class SportsCar extends Car{
    public function replaceBrand(){
        $this->brand = "GENERICA";
    }
}