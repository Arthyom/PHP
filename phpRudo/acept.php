<?php

    // crear una session para guardar los intentos de sesion
    session_start();
    $_SESSION['Fallidos'] = 0;
    $_SESSION['Fusuaros'] = Array();
    $_SESSION['Fcontras'] = Array();

    // conseguir los datos necesios
    $usuario = $_POST['usuario'];
    $contras = $_POST['contras'];

    // verificar que el usuario y la contraseña son corresctas
    if ( $usuario == 'gomez' && $contras =='1234' )
         echo '<h1>Bienvenido a la pagina principal</h1>';
    else
    {
        $_SESSION['Fallidos'] += 1;
        array_push($_SESSION['Fusuaros'],$usuario);
        array_push($_SESSION['Fcontras'],$contras);

        echo 'Intentos fallidos '. $_SESSION['Fallidos'].'<br>';
        
        foreach ($_SESSION['Fusuaros'] as $usr) 
             echo 'Usuarios fallidos '. $usr.'<br>';

        foreach ($_SESSION['Fcontras'] as $cnt) 
             echo 'Contrass fallidas '. $cnt.'<br>';
    
    }

?>