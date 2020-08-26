<?php

function sumarHasta1000(){
    $i = 1;
    $contador = 0;
    $sumaTotal = 0;

    while(is_int($i))
    {       
        if(($sumaTotal + $i) > 1000)
        {
        break;
        }
        else
        {
            $sumaTotal += $i;
            $i++;
        }
        echo $i . "<br/>";
        $contador++;
    }
    echo "Se han sumado un total de " . $contador . " numeros <br/> El total de la suma es de " . $sumaTotal;
}


echo sumarHasta1000();