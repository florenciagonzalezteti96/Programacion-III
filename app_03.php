<?php

$num1 = 5;
$num2 = 10;

function MostrarDosNumeros($x = 0, $y = 0){
    
    return $x . "<br/>" . $y;

}

function SumarDosNumeros($x = 0, $y = 0){
    
    return $x + $y;

}


echo MostrarDosNumeros($num1, $num2) . "<br/>" . sumarDosNumeros($num1, $num2);