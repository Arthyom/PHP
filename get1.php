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

		echo "Su nombre es $nombre","<br/>";
		echo "Su apellido es $apell","<br/>";
		echo "Su carrera es $carrera";

	?>

</body>
</html>