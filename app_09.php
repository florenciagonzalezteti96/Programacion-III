<?php

$vec = array(rand(), rand(), rand(), rand(), rand());
$total = 0;
$i = 0;
while($i<5)
{
    $total += $vec[$i];
    $i++;
}


if($total/5 > 6)
{
    echo "Los valores son: <br/>";
    echo var_dump($vec);
    echo "El total es: " . $total;
    echo "<br/> El promedio es mayor a 6";
}
elseif($total/5 < 6)
{   
    echo "Los valores son: <br/>";
    echo var_dump($vec);
    echo "El total es: " . $total;
    echo "<br/> El promedio es menor a 6";
}
elseif($total/5 == 6)
{
    echo "Los valores son: <br/>";
    echo var_dump($vec);
    echo "El total es: " . $total;
    echo "<br/> El promedio es igual a 6";
}