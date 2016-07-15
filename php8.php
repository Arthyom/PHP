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
			echo " $tupla["apellido"] "  ;


	?>
</body>
</html>