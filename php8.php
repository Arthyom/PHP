<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// arrays asociativos 

		/*
			capaces de usar un indice distinto al de un numero, los arrays de este tipo son semejantes a ls diccionarios de python o de ruby, su sintaxis es :

			$variable[] = array ( indice => valor, indice => valor)
		*/

		$VectorAsociativo = array ( 
			"carro"  => "rojo",
			"moto"   => "verde",
			"camion" => "azul"
		); 

		echo $VectorAsociativo["carro"];

		foreach ($VectorAsociativo as $Vehiculo)
			echo "$Vehiculo <br/>";


		/// imitando una tabla de base de datos 
		$TablaEmpleados = array (
			array ( "nombre" => "alfredo", "apellido" => "gonzalez", "tel"=> 4573433),
			array ( "nombre" => "aldo",    "apellido" => "gavinia", "tel"=> 453433),
			array ( "nombre" => "alfonso", "apellido" => "lopez", "tel"=> 499343)
		);

		foreach( $TablaEmpleados as $tupla )
			echo $tupla["apellido"]  ;


		// tabajando con el count y los arreglos multidimensionles 
		/* 
		se pueden crear arreglos multidimensionales en php ya sea que se declaren 
		propiamente o solo se indiquen
		*/
		$MatrizNueve[3][3];

		$cont = 0 ;
		for ( $i = 0 ; $i < 9 ; $i ++ ){
			for( $j = 0 ; $j < 9 ; $j ++ ){
				$MatrizNueve[$i][$j] = $cont;
				$cont++;
			}
			
		}

		echo "<br/>";
		for ( $i = 0 ; $i < 9 ; $i ++ ){
			for( $j = 0 ; $j < 9 ; $j ++ ){
				echo  $MatrizNueve[$i][$j]  ; 
				echo " ";
			}
			echo "<br/>";
		}

	?>
</body>
</html>