<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$nombre = $_REQUEST["txtNombre"];
		$apell  = $_REQUEST["txtApellido"];
		$carrer = $_REQUEST["txtCarrera"];

		$alto   = $_REQUEST["txtAlto"];
		$ancho  = $_REQUEST["txtAncho"];
		$area = $alto *$ancho;

		echo "<h1> Calcular area</h1>","<br/>";
		echo "Area del rectangulo <strong> ($area) <strong/>";

		echo "<h1> Mostrar nombres </h1>","<br/>";
		echo "Su nombre es <strong>$nombre</strong>","<br/>";
		echo "Su apellido es <strong>$apell</strong>","<br/>";
		echo "Su carrera es <strong>$carrer<strong>";

	?>

</body>
</html>