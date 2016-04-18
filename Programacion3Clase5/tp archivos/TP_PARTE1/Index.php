<?php



include_once "empleado.php";
include_once "persona.php";

$empleado = new empleado("Aixa", "Casanova", "33341152", "f" , "123","25000" );
$empleado2 = new empleado("Eddie", "Vedder", "15431152", "f" , "124","30000" );

$StringEmp = $empleado->ToString();

echo "$StringEmp";

?>