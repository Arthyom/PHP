<?php

    // factoril recursvo 
    function factorial ( $numero ){
        if ($numero == 0)
            return 1;
        else 
            return $numero * factorial($numero-1);
    }
    
   
    echo ' Salida ', factorial(20);

    echo ' Factorial con funcion ', gmp_strval(  gmp_fact(5) );
    



?>