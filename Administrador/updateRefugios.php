<?php 

try {
    include('../includes/data.php');
    function insertar($pdoCon){
        $id = $_GET['idRefugio'];
        $nom = $_GET['nombre'];
        $dir = $_GET['direccion'];
        $tel = $_GET['telefono'];
        $hor = $_GET['horario'];
        $mas = $_GET['tMascotas'];
        $imagen = $_GET['imagen'];


        $con = "UPDATE refugios
        SET nombre='$nom', direccion='$dir', telefono='$tel', horario='$hor',
         masctoas=$mas WHERE id = $id";
   

        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: refugios.php');
        else
            echo 'no se puede borrar';
        
    }
    
    insertar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>