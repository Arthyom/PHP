<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// trabajo con vectores 
			/* 
				los vectores pueden declararse mediante una especie de contructor, del mismo modo se pueden crear vectores 
				multidimencionales con las mismas declaraciones 
			*/
		echo "<h1>ciudades, arreglos con forech</h1>";
		$vectorNombres = array( "Santiago", "Lima", "Mexico", "Washington" );
		
		foreach ( $vectorNombres as $nombre ) 
			echo "$nombre<br/>";

		echo "<h1>ciudades, arreglos con for y count </h1>";
		for ( $i=0; $i < count($vectorNombres) ; $i++) 
			echo "$vectorNombres[$i] <br/>";
		

	?>

</body>
</html>