<?php



include_once "empleado.php";
include_once "persona.php";

 

?>
<html>

	<head>
		<title>Datos de persona</title>
		<script type="text/javascript" src="Funciones.js">
		
</script>
		<h2>Ingrese persona:</h2>
	</head>

	<body>
		<form action="administracion.php" method="post" enctype="multipart/form-data">
			<br> 
		 <input type="text" id="Nombre" name="Nombre" placeholder="Nombre">   <span id='Nom' style='display:none' >  </span>
			<br><br> 
			<input type="text" id="Apellido" name="Apellido" placeholder="Apellido">
			<br><br> 
		<!-- 	<select name="Sexo"><option value="F">F</option><option value="M">M</option></select> -->
			<input type="text" id="Sexo" name="Sexo" placeholder="Sexo">
			<br><br> 
			<input type="text" id="Dni" name="Dni" placeholder="Dni" OnKeyPress="ValidarNumero()">
			<br><br> 
			<input type="text" id="Legajo" name="Legajo" placeholder="Legajo" OnKeyPress="ValidarNumero()">
			<br><br> 
			<input type="text" id="Sueldo" name="Sueldo" placeholder="Sueldo" OnKeyPress="ValidarNumero()">
			<br><br> 
			<input type="file" id="FotoEmpleado" name="FotoEmpleado">
            <br><br>
			<input type="submit" name="SGuardar" value="Guardar" OnClick="EnviarDatos()">

		</form>
		<button OnClick="EnviarDatos()"> Validar</button>
		
	</body>

</html>