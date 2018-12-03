<?php

require_once('carro.php');

$c1 = new vehiculo\Carro("45", "amarillo");
$ce = new vehiculo\CarroElectrico();


$a1 = new vehiculo\avion\Avion();
$a1->setComp("volaris");

$t1 = new vehiculo\tren\Tren();
$t1->setComp("ferromex");


//echo var_dump($a1);
echo var_dump($c1);
echo var_dump($ce);

//echo var_dump($t1);

echo   "Estoy en la 22";

?>