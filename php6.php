<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		// vectores multidimencionales 
		$MatrizVector1 [0][0] = "uno";
		$MatrizVector1 [1][0] = "dos";
		$MatrizVector1 [2][0] = "tres";

		for ( $i = 0 ; $i < count($MatrizVector1) ; $i ++ )
			echo "$MatrizVector1[$i][0]<br/>"; 

	 ?>
</body>
</html>