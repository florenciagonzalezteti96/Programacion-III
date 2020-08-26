<?php

$a = 40;
$b = 18;
$c = 2;

function mostrarValorDelMedio($int1, $int2, $int3){
    if($int1 != $int2 && $int1 != $int3){
        if(($int1>$int2 && $int1<$int3) ||($int1<$int2 && $int1>$int3))
        {
            echo $int1;
        }
        elseif(($int2>$int1 && $int2<$int3) || ($int2<$int1 && $int2>$int3))
        {
            echo $int2;
        }
        elseif(($int3<$int1 && $int3>$int2) || ($int3>$int1 && $int3<$int2))
        {
            echo $int3;
        }
    }
    else
    {
        echo "No hay valor del medio";
    }
    
}

echo mostrarValorDelMedio($a, $b, $c);

