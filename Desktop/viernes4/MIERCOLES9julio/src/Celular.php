<?php
abstract class Celular{
    protected $marca;
    protected $numero;
    protected $mensaje;
    abstract public function realizarLlamada(int $numero);
    abstract public function enviarMensaje(int $numero, string $mensaje);
    abstract public function setMarca(string $marca);

}