<!DOCTYPE html>
<html>
<head>
	<title>Nombre y Datos PHP</title>
</head>
<body>
	<form method="get" action="get1.php">
	<h1>Area de nombres</h1>
		<strong><label>Nombre</label></strong>
		<input type="textbox" name="txtNombre"/>

		<br>

		<strong><label>Apellido</label></strong>
		<input type="textbox" name="txtApellido"/>
		
		<br>

		<strong><label>Carrera</label></strong>
		<input type="textbox" name="txtCarrera"/>

		<br>

		<button type="submit">Prescioname</button>
	</form>

	<form method="get" action="get1.php"> 
	<h1>Area de calculos</h1>
		<input type="textbox" name="txtAlto">
		<input type="textbox" name="txtAncho">
		<button type="submit">Calcular</button>
	</form>
</body>
</html>