<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="all">
</head>
<body>

<form align="center" method="POST" >
<br><br> 
<input type="text" name="Largo" placeholder="Largo del terreno"><br> 
<input type="text" name="Ancho" placeholder="Ancho del terreno"><br>
<input type="text" name="Radio" placeholder="Radio del terreno"><br> 

<input type="submit" name="SRectangulo" value="Rectangulo de alambre" class="MiBotonUTN"><br> 
<input type="submit" name="SCirculo" value="Circulo de alambre" class="MiBotonUTN" ><br> 
<input type="submit" name="SContrapiso" value="Materiales contrapiso"  class="MiBotonUTN"><br> 
</form>

<?php




if(isset($_POST["SRectangulo"]))
{
$largo=$_POST["Largo"];
$ancho=$_POST["Ancho"];
$valor=($largo*$ancho)/2;
ECHO "Necesita: ".$valor . " mts";
}
if(isset($_POST["SCirculo"]))
{
$radio=$_POST["Radio"];
$valor=(3.14159265*($radio*$radio));
ECHO  "Necesita: ".$valor . " mts" ;
}
if(isset($_POST["SContrapiso"]))
{
$largo=$_POST["Largo"];
$ancho=$_POST["Ancho"];
$cemento=($largo*$ancho)*2;
$cal=($largo*$ancho)*3;
ECHO  " cemento: ". $cemento . "<br>  cal: ". $cal ;
}

?>
</body>
</html>