<?php
$array = ['perro', 'gato', 'avestruz'];

function cambiarAnimales(&$animales){
    $animales = ['mono', 'gorila', 'cebra'];
}

cambiarAnimales($array);

foreach($array as $ar){
    echo $ar . "<br>";
}
?>
-