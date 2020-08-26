<?php

$vec = array();
$i = 0;
$j = 0;

while(count($vec)<10)
{
    if($i%2 != 0)
    {
        $vec[$j] = $i;
        $j++;
    }
    $i++;
}

echo "Con for:";
for($i=0;$i<10;$i++)
{
    echo "<br/>" . $vec[$i];
}

echo "<br/>Con while:";
$i = 0;
while($i<10)
{
    echo "<br/>" . $vec[$i];
    $i++;
}

echo "<br/>Con foreach:";
foreach($vec as $valor)
{
    echo "<br/>" . $valor;
}