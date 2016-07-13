<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// estructuras de control en php 
		// php usa las mismas estructuras de control que C

		$var1 = "hol";

		///// bloque  if 
		if (!$var){
			echo "<h1> el true puede ir en minusculas y o mayusculas </h1>";
		}
		else
			echo "<h1> el true no puede ir en mayusculas</h1>";

		///// bloque switch 
		switch ($var1) {
			case treu:  echo "el resultado es verdadero"; break;
			case false: echo "el resultado es false "; break;
			
			default : echo "no es booleana";		break;
		}

		///// blque for 
		for ( $var2 = 0 ; $var2 < 5 ; $var2 ++ ){
			$var3 = $var2+1;
			echo "<h1> Imprimiendo el titulo $var3 </h1>" ;
		}

		///// bloque while 
		$var4 = 0;
		while ( $var4 < 4 ){
			echo "<u> <h2> Imprimiendo un titulo secundario </h2> </u>";
			$var4++;
		}



	?>

</body>
</html>