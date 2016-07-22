<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		// conectarse a una base de datos del pho

			// conseguir la cadena de conexion
			$cadConex = mysqli_connect("localhost","root","");
			if ($cadConex)
				echo "conexion exitosa<br/>";


			// seleccionar la base de  datos 
			mysqli_select_db($cadConex,"base1");

			// hacer una consulta 
			$resultado = mysqli_query($cadConex,"select * from Cliete");
			if ($resultado)
				echo "consulta exitosa";

					// mostrar todos los registros 
			while ( ($fila = mysqli_fetch_array($resultado) )  ) {
			// imprimir nombres
			echo "<br>"."Nombre "."<strong>" .  $fila["nombre"] .  "</strong>" ."<br>";
			echo "Apellido "."<strong>" .  $fila["apellido"] .  "</strong>" ."<br>";
		}

		/*
			// intentar insertar una columna
		 mysqli_query($cadConex, "INSERT INTO Cliete(apellido,nombre) VALUES('topis','ivan')" );

		 $resultado2 = mysqli_query($cadConex,"select * from Cliete");
			if ($resultado2)
				echo "consulta exitosa";

					// mostrar todos los registros 
			while ( ($fila = mysqli_fetch_array($resultado2) )  ) {
			// imprimir nombres
			echo "<br>"."Nombre "."<strong>" .  $fila["nombre"] .  "</strong>" ."<br>";
			echo "Apellido "."<strong>" .  $fila["apellido"] .  "</strong>" ."<br>";

			
		}*/

		// eliminar algunos registros
		mysqli_query($cadConex,"DELETE FROM Cliete where apellido = 'topis'");

		$resultado2 = mysqli_query($cadConex,"select * from Cliete");
			if ($resultado)
				echo "consulta exitosa";

					// mostrar todos los registros 
			while ( ($fila = mysqli_fetch_array($resultado) )  ) {
			// imprimir nombres
			echo "<br>"."Nombre "."<strong>" .  $fila["nombre"] .  "</strong>" ."<br>";
			echo "Apellido "."<strong>" .  $fila["apellido"] .  "</strong>" ."<br>";
		}



	 ?>

</body>
</html>