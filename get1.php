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

		$alto   = $_GET["txtAlto"];
		$ancho  = $_GET["txtAncho"];

		echo "<h1> Calcular area</h1>","<br/>";
		echo "Area del rectangulo <strong> $alto * $ancho <strong/>";

		echo "<h1> Mostrar nombres </h1>","<br/>";
		echo "Su nombre es <strong>$nombre</strong>","<br/>";
		echo "Su apellido es <strong>$apell</strong>","<br/>";
		echo "Su carrera es <strong>$carrer<strong>";

	?>

</body>
</html>