<html>
<head>
	<title></title>
<!-- 	<link rel="stylesheet" type="text/css" href="estilo.css" media="all"> -->
</head>
<body>
<?php

if($_POST["cantidad"] >= 6)
{
	$cant= $_POST["cantidad"];
	$Precio = ($cant*35)*0.50;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
	 		echo "hola1";
		}else{
			$PrecioF = $Precio;
			echo "hola";
		}
 

}
if($_POST["cantidad"] = 5)
{
	if (isset($_POST["ArgentinaLuz"])) 
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.40;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
 
		}else{$PrecioF = $Precio;}
	}else
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.30;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
		
		}else{$PrecioF = $Precio;}
	}
}
if($_POST["cantidad"] = 4)
{
	if (isset($_POST["ArgentinaLuz"]) || isset($_POST["FelipeLamparas"])) 
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.25;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
 
		}else{$PrecioF = $Precio;}
	}else
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.20;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
 
	}else{$PrecioF = $Precio;}
	}
}
if($_POST["cantidad"] = 3)
{
	if (isset($_POST["ArgentinaLuz"])) 
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.15;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
 
	}else{$PrecioF = $Precio;}
	}else if (isset($_POST["FelipeLamparas"]))
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.10;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
	 
	}else{$PrecioF = $Precio;}
	}
	else
	{
	$cant= $_POST["cantidad"];
	$desc= ($cant*35)*0.05;
	$Precio = ($cant*35)-$desc;
	if ($Precio > 120) {
		$PrecioF = $Precio *1.10;
 
	}else{$PrecioF = $Precio;}
	}
}



?>
<!-- alert("Usted pago".(<?php $Precio?> *0.1)."de IBB"); -->
<form align="center" method="POST" >
<br><br>
<input type="text" name="cantidad" placeholder="Cantidad de lamparas"><br><br>
<select>
  <option Name="ArgentinaLuz">ArgentinaLuz</option>
  <option Name="FelipeLamparas">FelipeLamparas</option>
  <option Name="JeLuz">JeLuz</option>
  <option Name="HazIluminacion">HazIluminacion</option>
  <option Name="Osram">Osram</option>
  </select><br><br>
<input type="text" name="Precio" value="<?php echo "$PrecioF"; ?>" readonly placeholder="Precio con descuento"><br><br> 
<input type="submit" name="SCalcular" value="Calcular"><br><br> 

</form>

 
</body>
</html>