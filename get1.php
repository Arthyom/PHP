<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$nombre = $_GET["txtNombre"];
		$apell  = $_GET["txtApellido"];
		$carrer = $_GET["txtCarrera"];

		echo "Su nombre es <strong>$nombre</strong>","<br/>";
		echo "Su apellido es <strong>$apell</strong>","<br/>";
		echo "Su carrera es <strong>$carrer<strong>";

	?>

</body>
</html>