<?php 
    session_start();

    // cerrar la sesion
    if( isset($_SESSION['admin'])){
        session_destroy();
        header('Location: index.php');
    }
    else{
        if( isset($_SESSION['user'])){
            session_destroy();
            header('Location: index.php');
        }
        else{
            echo 'no se ha iniciado ninguna sesion';
            var_dump($_SESSION);
        }
    }
?>