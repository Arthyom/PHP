<?php
    // tabla ordenada de datos

    function cambiar ( $tabla ){
        $tabla[1] = $tabla[9];
        $tabla[2] = $tabla[5];
        return $tabla;
    }

    $dims = 10;
    $tablaDesOrd = array($dims);

    for ( $i = 0 ; $i <$dims ; $i ++ )
        $tablaDesOrd[$i] = rand(0,100);




    asort($tablaDesOrd);
    echo 'tabla sin ordenar ni cambiar --->', implode($tablaDesOrd,'; ') , '<br>';
    echo 'tabla sin ordenada y cambiarda ->', implode( cambiar($tablaDesOrd),'; '), '<br>';


    


?>