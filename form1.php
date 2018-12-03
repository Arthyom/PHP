<?php

$nombre = $_POST['nombre'];
$passwd = $_POST['pass'];

if ($nombre != null && $passwd != null) 
    echo "<h1>Bienvenido $nombre</h1>";
else
    echo "<h1>Usuario Rechazado</h1>";

?>