<?php

$lapicera = array(
                'Lapicera Uno' => array(
                    'color' => "Azul",
                    'marca' => "Bic",
                    'trazo' => "Fino",
                    'precio' => 20.00
                ),
                'Lapicera Dos' => array(
                    'color' => "Rojo",
                    'marca' => "Faber-Castell",
                    'trazo' => "Semi-Grueso",
                    'precio' => 15.00
                ),
                'Lapicera Tres' => array(
                    'color' => "Verde",
                    'marca' => "Bic",
                    'trazo' => "Grueso",
                    'precio' => 25.00
                )
                );

foreach($lapicera as $lapiceras => $elementos)
{
    echo "<h3> $lapiceras <h3>";

    foreach($elementos as $valorAsociado => $valor)
    {
        echo "<br>$valorAsociado: $valor";
    }
}