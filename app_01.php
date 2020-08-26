<?php

function guardarNombreYApellido($nombre = "Nombre", $apellido = "Apellido"){
    return $nombre . " " . $apellido;
}


echo guardarNombreYApellido("Florencia", "Gonzalez Teti");