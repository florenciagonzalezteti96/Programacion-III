<?php

function mostrarNombreDeNumero($num){
     if($num>20 && $num<60)
     {
        $f = new NumberFormatter('es', NumberFormatter::SPELLOUT);

        var_dump($f->format($num));
     }
     else
     {
         echo "El valor debe estar entre 20 y 60 <br/>";
     }
}

echo mostrarNombreDeNumero(10);
echo mostrarNombreDeNumero(60);
echo mostrarNombreDeNumero(50);