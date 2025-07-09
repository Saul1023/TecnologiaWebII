<?php
require_once "Celular.php";
class SamsungJ1 extends Celular{

    public function realizarLlamada(int $numero)
    {
        $this->numero = $numero;
        echo "Llamando a: ".$numero;
    }
    public function enviarMensaje(int $numero, string $mensaje)
    {
        $this->numero = $numero;
        $this->mensaje = $mensaje;
        echo "Enviando mensaje a: ".$numero."el mensaje es: ".$mensaje;
    }
    public function setMarca(string $marca)
    {
        $this->marca = $marca;
    }
    public function getInfo(){
            echo "Clase: ".__CLASS__."\n";
            echo "Marca del celular: ".$this->marca."\n";
    }
}