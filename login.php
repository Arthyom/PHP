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
            session_start();
            $_SESSION['admin']= array( 'id'=>$re['id'], 
            'nombre' => $re['nombre']);
            header('Location: Administrador/index.php');
        }
        else{
        if( $re['rol'] == 'user'){
            session_start();
            $_SESSION['user']= array( 'id'=>$re['id'], 
            'nombre' => $re['nombre']);
            header('Location: Adoptante/index.php');
        }
            else
            header('Location: indexError.php');
        }
        
        var_dump($_SESSION);
    }
    
    registrar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>