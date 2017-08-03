<?php

    $archivo = file_get_contents('archivo.txt');
    $numscar = readfile('archivo.txt');
    $tabla = file('archivo.txt');
    echo 'leyendo el archivo completo, regresando una cadena '.$archivo.'<br>';
    echo '<br>';
    echo 'leyendo el archivo completo, regresando num. carcs '.$numscar.'<br>';
    

echo 'Leyendo archivo completo, regresando tabla ';
foreach ($tabla as $linea ) 
    echo '<br> ', $linea;


//file_put_contents('archivo.txt', 'olism');
fclose('archivo.txt');
$variable = fopen('esc.txt', 'w');

fwrite($variable,'olism ya');
fclose($variable);

?>