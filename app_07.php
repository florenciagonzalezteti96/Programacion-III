<?php

function mostrarFechaDelServidor($opcionElegida = 1){
    $estacion;

    if(date("m") == 12 || date("m") == 1 || date("m") == 2)
    {
        $estacion = "Verano";
    }
    else if(date("m") == 3 || date("m") == 4 || date("m") == 5)
    {
        $estacion = "Otoño";
    }
    else if(date("m") == 6 || date("m") == 7 || date("m") == 8)
    {
        $estacion = "Invierno";
    }
    else if(date("m") == 9 || date("m") == 10 || date("m") == 11)
    {
        $estacion = "Primavera";
    }
    switch($opcionElegida)
    {
        case 1:
            echo date("d/m/Y") . "<br/> La estacion es: " . $estacion;
        break;
        case 2:
            echo date("D/F/Y") . "<br/> La estacion es: " . $estacion;
        break;
        case 3:
            echo date("j/n/Y") . "<br/> La estacion es: " . $estacion;
        break;
        case 4:
            echo date("l/M/L") . "<br/> La estacion es: " . $estacion;
        break;
    }
}

echo mostrarFechaDelServidor(4);