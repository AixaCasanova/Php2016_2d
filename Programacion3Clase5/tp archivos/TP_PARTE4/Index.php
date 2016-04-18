<?php



include_once "empleado.php";
include_once "persona.php";

 

?>
<html>

	<head>
		<title>Datos de persona</title>
		<script type="text/javascript" src="Funciones.js">
		function ValidarCadena(cadenaAValidar)
		{
			alert("ingreso ValidarCadena");
			if (cadenaAValidar == null || cadenaAValidar == "") 
			{
				return false;
			}
			else
			{
				return true
			}
		}
		function EnviarDatos()
		{
			alert("ingreso");
			var cadAlert;

    		if(ValidarCadena(document.getElementById("Nombre")==false){cadAlert = cadAlert + "El Nombre es requerido  \n"}
			if(ValidarCadena(document.getElementById("Apellido")==false){cadAlert = cadAlert + "El Apellido es requerido  \n"}
			if(ValidarCadena(document.getElementById("Sexo")==false){cadAlert = cadAlert + "El Sexo es requerido  \n"}
			if(ValidarCadena(document.getElementById("Dni")==false){cadAlert = cadAlert + "El Dni es requerido  \n"}
			if(ValidarCadena(document.getElementById("Legajo")==false){cadAlert = cadAlert + "El Legajo es requerido  \n"}
			if(ValidarCadena(document.getElementById("Sueldo")==false){cadAlert = cadAlert + "El Sueldo es requerido \n"}
			 
	 		alert(cadAlert);
}</script>
		<h2>Ingrese persona:</h2>
	</head>

	<body>
		<form action="administracion.php" method="post" enctype="multipart/form-data">
			<br> 
			<input type="text" id="Nombre" name="Nombre" placeholder="Nombre">
			<br><br> 
			<input type="text" id="Apellido" name="Apellido" placeholder="Apellido">
			<br><br> 
		<!-- 	<select name="Sexo"><option value="F">F</option><option value="M">M</option></select> -->
			<input type="text" id="Sexo" name="Sexo" placeholder="Sexo">
			<br><br> 
			<input type="text" id="Dni" name="Dni" placeholder="Dni">
			<br><br> 
			<input type="text" id="Legajo" name="Legajo" placeholder="Legajo">
			<br><br> 
			<input type="text" id="Sueldo" name="Sueldo" placeholder="Sueldo">
			<br><br> 
			<input type="file" id="FotoEmpleado" name="FotoEmpleado">
            <br><br>
			<input type="submit" name="SGuardar" value="Guardar" OnClick="EnviarDatos()">
		</form>
	</body>

</html>