<?php


//var_dump($_POST);
echo "<BR>";
//var_dump($_FILES);
echo "<BR>";
//var_dump($_FILES["FotoAutito"]);
echo "<BR>";
$patente=$_POST["patente"];
//$ArchivoDestino= "fotitos/".$_FILES["FotoAutito"]["name"];
$extanterior=explode(".", $_FILES["FotoAutito"]["name"]);

$ArchivoDestino="fotitos/".$patente.".".$extanterior[1];

move_uploaded_file($_FILES["FotoAutito"]["tmp_name"], $ArchivoDestino);

 
/*	1- si es un ingreso lo guardo en ticket.txt
 	2- si es salida leo el archivo:
 	leer del archivo todos los datos, guardarlos en un array
	si la patente existe en el archivo .
	 sobreescribo el archivo con todas las patentes
	 y su horario si la patente solicitada
	... calculo el costo de estacionamiento a 
	20$ el segundo y lo muestro.
	si la patente no existe mostrar mensaje y 
	el boton que me redirija al index  
	3- guardar todo lo facturado en facturado.txt*/
$patente=$_POST["patente"];
$accion=$_POST["estacionar"];
$listaDeAutos  = array();
$listaauxiliar = array();
$ahora=date("y-m-d h:y:s");

if ($accion=="ingreso") 
{
echo "Se guardo la patente: $patente";

$archivo=fopen("Ticket.txt", "a"); //Se abre el archivo

fwrite($archivo, $patente."[".$ahora."[".$ArchivoDestino."\r\n");  //se escribe el arch
fclose($archivo); // se cierra
} 
else
{
	$listaDeAutos[]=$auto;
	$archivo=fopen("Ticket.txt", "r"); //Se abre el archivo
	while (!feof($archivo)) {
		$renglon=fgets($archivo); //guarda en $renglon linea a linea  gets trae el string getc trae array de char 
		$auto = explode("[", $renglon); //explode devuelve un array  separando lo que hay en reglon por el delimitador osea patente¨en la pos 1 y hs en la pos 2
	
	}
	//var_dump($listaDeAutos);
	fclose($archivo); // se cierra
	$esta = false;
	foreach ($listaDeAutos as  $auto) 
	{
		//echo $auto[0]."<br>"; //auto en la posicion 0 es la patente en la posicion 1 la h
		if ($auto[0] == $patente) 
		{
			$esta = true;
			$fechaInicio= $auto[1];
			$diferencia = strtotime($ahora) - strtotime($fechaInicio) ;
			echo "El tiempo transcurrido es: $diferencia <br>";
			$Precio= $diferencia *20;
			echo "Precio: $Precio <br>";
			// echo "inicio: $fechaInicio";
			// echo "ahora: $ahora ";
		}else
		{
			if ($auto[0] != "")
			{
				$listaauxiliar[]=$auto;	
	   		}
		}
	}
	if ($esta) 
	{
		echo "Esta el auto! ";
		 $archivo=fopen("Ticket.txt", "w"); //Se abre el archivo
		 foreach ($listaauxiliar as $auto)
		  {
		  	if ($auto[0]!= "" )
			{
			//fwrite($archivo, $auto[0]."[".$auto[0]."\r\n");  //se escribe el arch ASI DEJA UN ESPACIO!!
			fwrite($archivo, $auto[0]."[".$auto[1]."[".$auto[2]."\n");  
			}		 
		  }
		  fclose($archivo); // se cierra		

	}else
	{
		echo "No esta el auto!";
	}

}


///// traigo del archivo
echo "<BR><BR><BR>";

$archivo=fopen("Ticket.txt", "r"); //abro el archivo ticket como read/lectura

echo"<table BORDER=1>";
echo "<th>patente</th><th>fecha</th><th>foto</th>";
	while (!feof($archivo))  //lo recorre hasta el final osea mientras que no sea el final del archivo
	{
		$renglon=fgets($archivo); // guardo en renglon la linea fget del archivo
		$auto=explode("[", $renglon); //guardo en auto todo lo que esta en la linea separado por "[" osea en auto[0] la patente en auto[1] fecha y en auto[2] dir de la foto
		if ($auto[0] != "") //si auto[0] no viene seteado que no lo lea sino que entre al if
		{
 		//SI ENTRA AL IF TERMINA DE CREAR LA TABLA!
		echo "<tr><td>".$auto[0]."</td><td>".$auto[1]."</td><td><img src=".$auto[2]." width=100 heigt=100 ></td></tr>";
 		}
	}

echo "</table>";








?>
<br>
<br>
<a href="index.php">volver</a>