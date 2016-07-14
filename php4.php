<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// arreglos en php
		/*
		semejantes a los vectores de C, pero con algunas caracteristicas un poco exoticas 
		*/

		// se pueden crear vectores sin declarar las dimensiones del arreglo 
		$VectorArray[0] = "numero0";
		$VectorArray[1] = "numero1";
		$VectorArray[2] = "numero2";

		$VectorArray[6] = "numero6";
		$VectorArray[7] = "numero7";

		for ( $i = 0 ; $i < 8 ; $i ++ )
			echo "<h1> la posicion $i del arreglo es = $VectorArray[$i] </h1>";

		// notece como en caso de no existir una parte del vector la sucesion se salta  



	?>

</body>
</html>