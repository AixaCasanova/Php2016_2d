<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="all">
</head>
<body>

<form align="center" method="POST" >
<br><br> 
Temperatura: <input type="text" name="temp" placeholder="Temperatura"><br> 
 
 
 <input type="submit" name="SAFareheit" value="A Fareheit" class="MiBotonUTN" > 
<input type="submit" name="SACelius" value="A Celicus"  class="MiBotonUTN"><br> 

</form>
<?php

if(isset($_POST["SAFareheit"]))
{
	if( isset($_POST["temp"]))
	{
	$temp= $_POST["temp"];
	$far = 	((9/5)*$temp) +32;
	ECHO $temp."°C son ".$far. "° fareheit";
	}
}

if(isset($_POST["SACelius"]))
{
	if (isset($_POST["temp"])) 
	{	
	$temp =$_POST["temp"];
	$cel= ($temp - 32)*(5/9);
	ECHO $temp."°F son ".$cel. "° celsius";
	}
}


?>
</body>
</html>