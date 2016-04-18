<?php



include_once "empleado.php";
include_once "persona.php";

 

?>
<html>

	<head>
		<title>Datos de persona</title>
		<h2>Ingrese persona:</h2>
	</head>

	<body>
		<form action="administracion.php" method="post" enctype="multipart/form-data">
			<br> 
			<input type="text" name="Nombre" placeholder="Nombre">
			<br><br> 
			<input type="text" name="Apellido" placeholder="Apellido">
			<br><br> 
		<!-- 	<select name="Sexo"><option value="F">F</option><option value="M">M</option></select> -->
			<input type="text" name="Sexo" placeholder="Sexo">
			<br><br> 
			<input type="text" name="Dni" placeholder="Dni">
			<br><br> 
			<input type="text" name="Legajo" placeholder="Legajo">
			<br><br> 
			<input type="text" name="Sueldo" placeholder="Sueldo">
			<br><br> 
			<input type="submit" name="SGuardar" value="Guardar">
		</form>
	</body>

</html>