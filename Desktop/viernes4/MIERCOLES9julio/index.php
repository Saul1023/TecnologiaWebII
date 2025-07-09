<?php
/*incluir la clase estudiante
// -> onclude, include_once. require, require_once
require_once 'src/Estudiante.php';

$e = new ESTUDIANTE('Juan','Perez',34454);
print($e."\n");*/
/*HERENCIA
require_once "src/SportsCar.php";
require_once "src/Car.php";
$sc = new SportsCar;
$sc->setBrand("Toyota");
echo $sc->getInfo();

$sc->replaceBrand();
echo $sc->getInfo();

$c = new Car;
$c->brand="NISSAN";
echo $c->getInfo();
*/
require_once "src/SamsungJ1.php";
$cel = new SamsungJ1();
$cel->setMarca("SAMSUNG");
$cel->getInfo();
echo "REALIZANDO LLAMADA\n";
$cel1 = new SamsungJ1();
$cel1->realizarLlamada(78123322);
echo "ENVIAR MENSAJE\n";
$cel1 = new SamsungJ1();
$cel1->enviarMensaje(78123322,"hola mundo");

