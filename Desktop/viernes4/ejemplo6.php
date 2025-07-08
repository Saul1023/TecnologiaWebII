<?php
function verPelicula($titulo = "Avatar 2"){
    return "Vamos a ver la pelicula $titulo" . "<br>";
}
echo verPelicula();
echo verPelicula("Sim");