<?php 

try {

    include('../includes/data.php');
    $id = $_GET['idMascota'];

    function borrar($pdoCon,$id){
        $tp = $pdoCon->exec('DELETE FROM mascotas WHERE id ='.$id);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        else
            header('Location: errorMascotas.php');
    }
    borrar($pdoCon,$id);

} catch (\Throwable $th) {
    echo 'Error inesperado';
}

    

?>