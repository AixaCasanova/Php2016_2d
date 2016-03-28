<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">

<input type="text" name="primero" placeholder="primero"><br><br>
<input type="text" name="segundo" placeholder="segundo"><br><br>
<input type="text" name="tercero" placeholder="tercero"><br><br>
<input type="submit" name="calcular" value="calcular">

</form>

<?php

//var_dump($_POST);

$num = 0;
$max=0;

foreach ($_POST as $item ) 
{
	 if ($item > $max && $item != "calcular") {
	 	$max = $item;
	 }
}
echo "<br>El mayor es :".$max;

?>

</body>
</html>
 