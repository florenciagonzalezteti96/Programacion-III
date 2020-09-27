<?php 

require('fabrica.php');

$_pathMostrar = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>HTML5 - Empleados</title>
                    </head>
                    <body>
                    <a href="./mostrar.php">Mostrar Empleados</a>
                    </body>
                    </html>';

$_pathIndex = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>HTML5 - Empleados</title>
                    </head>
                    <body>
                    <a href="./index.html">Mostrar Empleados</a>
                    </body>
                    </html> ';

$_pathArchivoEmpleados = "./archivos/empleados.txt";

// if(isset($_POST["btnEnviar"]))
// {
    
    // if(isset($_POST["txtDni"]) && 
    // isset($_POST["txtNombre"]) &&
    // isset($_POST["cboSexo"]) && 
    // isset($_POST["txtLegajo"]) &&
    // isset($_POST["txtSueldo"]) &&
    // isset($_POST["rdoTurno"])
    // ){
        $_nuevoEmpleado = new Empleado($_POST["txtNombre"], $_POST["txtApellido"], $_POST["txtDni"], $_POST["cboSexo"], $_POST["txtLegajo"], $_POST["txtSueldo"], $_POST["rdoTurno"]);
        $_nuevaFabrica = new Fabrica("Fabrica HTML5", 7);

        echo "el nuevo empleado para agregar es: " . $_nuevoEmpleado->ToString() . "<br>";

        $_nuevaFabrica->TraerDeArchivo($_pathArchivoEmpleados);

        if($_nuevaFabrica->AgregarEmpleado($_nuevoEmpleado)){
            $_nuevaFabrica->GuardarEnArchivo($_pathArchivoEmpleados);
            echo $_pathMostrar;
        }
        else
        {
            echo "No pudo agregarse al siguiente empleado a la fabrica: <br>" . $_nuevoEmpleado->ToString() . "<br>";
            echo $_pathIndex;
        }
    // }
// }
// else
// {
//     echo "No se envio";
// }


