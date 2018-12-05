<?php 

try {
    include('includes/data.php');
    function registrar($pdoCon){
        $nom = $_GET['user'];
        $pas = $_GET['pass'];

        $con = "SELECT * FROM usuarios WHERE 
                  contra='$pas' AND nombre='$nom'";

        $tp = $pdoCon->prepare($con);
        $tp->execute();
        $re=$tp->fetch();
        echo(var_dump($re));

        if( $re['rol'] == 'admin'){
            /// insertar sesion de admin
            header('Location: Administrador/index.php');
        }
        else{
        if( $re['rol'] == 'user'){
            /// insertar sesion de user
            header('Location: Adoptante/index.php');
        }
            else
            header('Location: index.php');
        }
        
    }
    
    registrar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>