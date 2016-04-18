<?php
/**
* 
*/
include_once "empleado.php";

$empleados = array();
$archivo=fopen("empleados.txt", "r"); //Se abre el archivo
	while (!feof($archivo)) 
	{
		$renglon=fgets($archivo); //guarda en $renglon linea a linea  gets trae el string getc trae array de char 
		$empl = explode("-", $renglon); //explode devuelve un array  separando lo que hay en reglon por el delimitador osea patente¨en la pos 1 y hs en la pos 2
		$empleados[]=$empl;
	}

	foreach ($emp as $empleados) {
		$unEmp=new empleado ($emp[0],$emp[1],$emp[2],$emp[3],$emp[4],$emp[5]);
		echo $unEmp->ToString();
	}
	var_dump($empleados);

?>