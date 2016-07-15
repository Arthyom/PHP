<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		 //  funciones de cadena variables 
		/*** str_replacer ***/
		// reemplaza una cadena indicada con otra dentro de una variable original
		$varOriginal = "cadena original en cuestion de cadena";

		echo "$varOriginal<br/>";
		echo str_replace("original", "nueva", $varOriginal), "<br/>";

		// funciones de mayusculas y minusculas
		echo strtoupper($varOriginal), " ";
		echo strtolower($varOriginal), "<br/>";

		// funciones de repeticion y conteo
		echo count_chars( $varOriginal, 'c');
		echo substr_count( $varOriginal, "cadena" );
	?>

</body>
</html>