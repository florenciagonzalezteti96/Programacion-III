<?php

require ('fabrica.php');

$empleado1 = new Empleado("Pedro", "Gomez", 222222, 'm', 1000001, 7000, "turno mañana");
$empleado2 = new Empleado("Juana", "Martinez", 333333, 'f', 1000002, 6000, "turno noche");
$empleado3 = new Empleado("Brenda", "Perez", 444444, 'm', 1000003, 8000, "turno mañana");
$empleado4 = new Empleado("Agustina", "Gomez", 555555, 'f', 1000004, 10000, "turno noche");
$empleado5 = new Empleado("Lucas", "Gutierrez", 666666, 'm', 1000005, 200, "turno mañana");
$empleado6 = new Empleado("Juan", "Martinez", 777777, 'm', 1000006, 200, "turno noche");

$fabrica = new Fabrica("Los pepitos");

if($fabrica->AgregarEmpleado($empleado1))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}
if($fabrica->AgregarEmpleado($empleado2))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}
if($fabrica->AgregarEmpleado($empleado3))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}
if($fabrica->AgregarEmpleado($empleado4))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}
if($fabrica->AgregarEmpleado($empleado5))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}
if($fabrica->AgregarEmpleado($empleado6))
{
    echo "Se agrego al empleado<br>";
}
else
{
    echo "No se agrego al empleado<br>";
}

echo $fabrica->ToString();

echo $fabrica->CalcularSueldos();

if($fabrica->EliminarEmpleado($empleado2))
{
    echo "Se elimino al empleado<br>";
}
else
{
    echo "No se elimino al empleado<br>";
}

echo $fabrica->ToString();