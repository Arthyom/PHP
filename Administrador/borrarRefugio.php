<?php 

try {

    include('../includes/data.php');
    $id = $_GET['idRefugio'];

    function borrar($pdoCon,$id){
        $tp = $pdoCon->exec('DELETE FROM refugios WHERE id ='.$id);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: refugios.php');
        else
            echo 'no se puede borrar';
        
    }
    
    borrar($pdoCon,$id);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}


    

?>