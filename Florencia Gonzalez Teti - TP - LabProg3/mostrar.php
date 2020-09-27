<?php

require ('administracion.php');

$_pathDirectorioEmpleados = "./archivos";
$_pathArchivoEmpleados = $_pathDirectorioEmpleados . "/empleados.txt";

if(is_dir($_pathDirectorioEmpleados))
{
    if($_archivoEmpleados = fopen($_pathArchivoEmpleados, "r+"))
    {
        if ('' != file_get_contents($_pathArchivoEmpleados))
        {
            echo "Empleados: <br>";
            
            while(!feof($_archivoEmpleados))
            {
                    $empleadoEnArchivo  = fgets($_archivoEmpleados);
                    
                    $datosEmpleado = explode(" - ", $empleadoEnArchivo);

                    $datosEmpleado[0] = trim($datosEmpleado[0]);

                    if($datosEmpleado[0] != '')
                    {
                        $datosEmpleado[6] = trim($datosEmpleado[6], "\r\n");

                        $empleadoNuevo = new Empleado($datosEmpleado[0], $datosEmpleado[1], $datosEmpleado[2], $datosEmpleado[3],$datosEmpleado[4],$datosEmpleado[5],$datosEmpleado[6]);

                        echo "<br>";
                        echo $empleadoNuevo->ToString();
                        echo " <a href='./eliminar.php?txtLegajo=".$datosEmpleado[4]."' method='GET'> Eliminar </a>";  
                    }
            }
        }
        fclose($_archivoEmpleados);
    }
    else
    {
        echo "Error al abrir el archivo de empleados";
    }   
}
else
{
    echo "Error al acceder al directorio del archivo de empleados";
}