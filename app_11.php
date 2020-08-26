<?php

$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';

echo "Solo valores <br>";
foreach($v as $valor)
{
    echo "El valor es: " . $valor . "<br>";
}

echo "----------<br>Valor y valor asociado <br>";
foreach($v as $valorAsociado => $valor)
{
    echo "El valor asociado es " . $valorAsociado . " y el valor es " . $valor . "<br>";
}