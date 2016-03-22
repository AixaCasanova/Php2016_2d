<html>
<head>
	<title></title>
</head>
<body>

<?php

echo "Hola";

$nombre = "Aixa";
echo "<br>";
echo  "<h1>".$nombre." Casanova"."</h1>";
echo "<br>";
print("Su nombre es: ".$nombre);

$num = 28;

 if ($num > 18) {
 	echo "<br><br> Es mayor de edad <br>";
 }else{

 echo "Es menor de edad";
 }

$MiArray= array(2,4,6);

foreach ($MiArray as $elemento) {
	echo "<br>".$elemento."<br>";
}

var_dump($MiArray);
echo "<br>";

$MiNuevoArray = array("Pizza"=>20 , "Coca Cola" =>15);
var_dump($MiNuevoArray);
echo "<br>";

$ArrayClaveValor =  array("Nombre" => "Aixa" , "Apellido" => "Casanova", "Soltero" => true, "Fecha de nacimiento " => date("dma"));
var_dump($ArrayClaveValor);

echo "<br>";
$arrayVacio = array();
$arrayVacio[0] = "Hola";
$arrayVacio[] = "Chau";
var_dump($arrayVacio);

$arrayVacio[] = $MiNuevoArray;
echo "<br>";
var_dump($arrayVacio);

$arrayVacio["Productos"] = $MiNuevoArray; //Array de array 
echo "<br>";
var_dump($arrayVacio);
echo "<br>";
echo "Valor pizza: ".$arrayVacio["Productos"]["Pizza"];
echo "<br>";

$MiObjeto= new stdclass();
$MiObjeto->Nombre="Aixa"; //Todo junto sin espacios!
$MiObjeto->Apellido="Casanova";
$MiObjeto->Soltero=true;
$MiObjeto->FechaDeNacimiento=date("08/02/1988");
$MiObjeto->Productos=$MiNuevoArray;
var_dump($MiObjeto);
echo "<br>";

	 class Alumno
	{	
		public $Nombre;
		public $Apellido;

		public function Mostrar()
		{
		$this->RetornarDatos();
		}

		private function RetornarDatos()
		{
			echo "<br>";
			echo "Su nombre es: ".$this->Nombre."<br>";
			echo "Su Apellido es: ".$this->Apellido."<br>";
		}

		public static function MostrarEstaticos($alumno)
		 {
		 	$alumno->Mostrar();
		 }

	}

$yo = new Alumno();
$yo->Nombre="Aixa";
$yo->Apellido="Casanova";
var_dump($yo);
echo "<br>";
$yo->Mostrar(); //metodo de instancia
echo "<br>";

Alumno::MostrarEstaticos($yo);  //metodo de clase/estaticos --> con ::
$yo->Soltero=true; //se agrega un atributo dinamicamente




?>
</body>
</html>