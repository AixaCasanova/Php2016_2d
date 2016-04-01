<html>
<head>
	<title></title>
</head>
<body>

<form id="FormIngreso" align="center" method="POST">
<input type="text" name="prod1" placeholder="producto 1" ><br><br>
<input type="text" name="prod2" placeholder="producto 2"><br><br>
<input type="text" name="prod3" placeholder="producto 3"><br><br>

<input type="submit" name="submitSuma" value="Suma"><br><br>
<input type="submit" name="submitProm" value="Promedio"><br><br>
<input type="submit" name="submitPrecioF" value="Precio final"><br><br>
</form>

<?php
 

$valor=0;

//var_dump($_POST);
if (isset($_POST['submitSuma'])) 
{
	$prod1=$_POST['prod1'];
$prod2=$_POST['prod2'];
$prod3=$_POST['prod3'];
$valor= $prod1+$prod2+$prod3;
echo "<br>Suma: ".$valor; 
}

if (isset($_POST['submitProm'])) 
{
	$prod1=$_POST['prod1'];
$prod2=$_POST['prod2'];
$prod3=$_POST['prod3'];
$valor= ($prod1+$prod2+$prod3) / 3;
echo "<br>Promedio: ".$valor; 
}

if (isset($_POST['submitPrecioF'])) 
{
	$prod1=$_POST['prod1'];
$prod2=$_POST['prod2'];
$prod3=$_POST['prod3'];
$valor= ($prod1+$prod2+$prod3) * 1.21;
echo "<br>Precio final: ".$valor; 
}


?>


</body>
</html>