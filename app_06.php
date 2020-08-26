<?php

function calcularValor($operador = "", $op1 = 0, $op2 = 0){
    switch($operador)
    {
        case "+":
            echo $op1 + $op2;
        break;
        case "-":
            echo $op1 - $op2;
        break;
        case "*":
            echo $op1 * $op2;
        break;
        case "/":
            if($op2 == 0)
            {
                echo "No se puede realizar la division por cero.";
            }
            else
            {
                echo $op1 / $op2;
            }
        break;
    }
}

echo calcularValor("-", 10, 5);