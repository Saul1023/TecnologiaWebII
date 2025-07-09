<?php
class Car{
    protected $brand;
    //Setter de la propiedad %brand
    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function getInfo(){
        return "Marca del auto: ".$this->brand."\n";
    }

}