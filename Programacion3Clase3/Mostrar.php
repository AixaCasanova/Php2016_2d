<h1> datos recibidos</h1>
<h3> 
<?php
echo "Recibidos:<br>";
//var_dump($_POST);
//var_dump($_GET);

$nombre= $_POST['usuario'];
$clave= $_POST['clave'];
echo "Nombre: ".$nombre;
echo "<br>Clave: ".$clave;

if ($nombre == "Admin" && $clave =="1234") {
	//include_once("Bienvenido.html");
	include("Bienvenido.html");
	//require("Bienvenido.html");
}else
{
	include("NoLogueado.html");
}

?>
</h3> 