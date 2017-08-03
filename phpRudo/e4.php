<?php 
    // repeticiones genericas 
    function combinar ( $tablaEntrada ){
        $tablaSalida = array();
        while ( count($tablaSalida) < count($tablaEntrada) ){
            $palabraExtraida = $tablaEntrada[array_rand($tablaEntrada)];

            if( !in_array( $palabraExtraida, $tablaSalida) )
                array_push($tablaSalida, $palabraExtraida);
        }
        return implode(' ', $tablaSalida);
    }
    echo combinar( array('hola', 'papu', 'oye', 'si', 'que', 'rico'));
?>