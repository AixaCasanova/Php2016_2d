<?php
include_once("empleado.php");
//var_dump($_POST);

 
//  if (isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Dni"]) && isset($_POST["Legajo"]) && isset($_POST["Sueldo"]) ){
//   echo "hola";
//   }else{
//  echo "<a href=./Index.php>Datos vacios! - Volver</a>";
// }

if ($_POST["Nombre"] == "" || $_POST["Apellido"]==""  || $_POST["Dni"]==""  || $_POST["Legajo"]=="" && $_POST["Sueldo"] == "" )
{
	echo "<a href=./Index.php>Datos vacios! - Volver</a>";
}else
{
	$unEmpleado= new empleado($_POST["Nombre"],$_POST["Apellido"],$_POST["Dni"],$_POST["Sexo"],$_POST["Legajo"],$_POST["Sueldo"]);
	//var_dump($unEmpleado);
	echo $unEmpleado->ToString();
}

?>