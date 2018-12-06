<?php 

try {

    include('../includes/data.php');
    $id = $_GET['idUsuario'];

    function borrar($pdoCon,$id){
        $tp = $pdoCon->exec('DELETE FROM usuarios WHERE id ='.$id);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: administradores.php');
        else
            header('Location: errorAdministradores.php');
        
    }
    
    borrar($pdoCon,$id);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>