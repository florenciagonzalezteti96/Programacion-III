<?php

$animales = array();
$anios = array();
$lenguajes = array(); 

array_push($animales, "Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($anios, "1986", "1996", "2015", "78", "86");
array_push($lenguajes, "php", "mysql", "html5", "typescript", "ajax");

$arrayAsociativo = array('Primer Array' => $animales, 'Segundo Array' => $anios, 'Tercer Array' => $lenguajes);

$arrayIndexado = array($animales, $anios, $lenguajes);

//muestro array asociativo
foreach($arrayAsociativo as $array => $elementos)
{
    echo "<br>$array y sus elementos: ";
    foreach($elementos as $elemento => $detalle)
    {
        echo "<br>$detalle";
    }
}

//muestro array indexado
echo "<br>";
var_dump($arrayIndexado);




