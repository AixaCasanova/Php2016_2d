<?php
include_once("empleado.php");
//var_dump($_POST);

 $sizeFotoEnMb = ((($_FILES["FotoEmpleado"]["size"])/1024)/1024);
 
//  if (isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Dni"]) && isset($_POST["Legajo"]) && isset($_POST["Sueldo"]) ){
//   echo "algo";
//   }else{
//  echo "<a href=./Index.php>Datos vacios! - Volver</a>";
// }


 
	 if ($_POST["Nombre"] == "" || $_POST["Apellido"]==""  || $_POST["Dni"]==""  || $_POST["Legajo"]=="" && $_POST["Sueldo"] == "" && $_FILES["FotoEmpleado"] == "")
	{
		//echo "<a href=./Index.php>Datos vacios! - Volver</a>";
	}elseif ($_FILES["FotoEmpleado"]["type"]<> "image/jpeg") 
	{
		echo "<a href=./Index.php>Seleccione una imagen! - Volver</a>";
	}elseif (!($ext == "JPG" || $ext =="BMP" || $ext =="GIF" || $ext == "PNG" || $ext == "JPEG" || $ext == "jpg" || $ext =="bmp" || $ext =="gif" || $ext == "png" || $ext == "jpeg")) {
		echo "<a href=./Index.php>Extensiones válidas = JPG, BMP, GIF, PNG o JPEG. - Volver</a>";
	}elseif ($sizeFotoEnMb > 1) {
		echo "<a href=./Index.php>La foto debe pesar menos a 1 MB! - Volver</a>";
	}//falta verificar si la imagen existe
	else
	{
		$archNombre= explode(".", $_FILES["FotoEmpleado"]["name"]);
		$ext=$archNombre[1];
		$ArchivoDestino="FotosEmpleados/".$_FILES["FotoEmpleado"]["name"];
		move_uploaded_file($_FILES["FotoEmpleado"]["tmp_name"], $ArchivoDestino);
		 

		$unEmpleado= new empleado($_POST["Nombre"],$_POST["Apellido"],$_POST["Dni"],$_POST["Sexo"],$_POST["Legajo"],$_POST["Sueldo"], $ArchivoDestino);
		
		echo $unEmpleado->ToString();

		$archivo=fopen("empleados.txt", "a"); //Se abre el archivo
		
		if(fwrite($archivo, $unEmpleado->ToString()."\r\n"))
		{  //se escribe el arch
			fclose($archivo); // se cierra
		}
		else{echo "<a href=./Index.php>No se pudo agregar! - Volver</a>";}
 	}

?>