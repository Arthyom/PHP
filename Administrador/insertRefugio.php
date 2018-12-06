<?php 

try {
    include('../includes/data.php');
    function insertar($pdoCon){
        $nom = $_GET['nombre'];
        $dir = $_GET['direccion'];
        $tel = $_GET['telefono'];
        $hor = $_GET['horario'];
        $mas = $_GET['tMascotas'];
        $imagen = $_GET['imagen'];


        $con = 'INSERT INTO refugios
        (nombre, direccion, telefono, horario, masctoas)'.
        "VALUES ('$nom', '$dir','$tel' , '$hor', $mas)";

        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: refugios.php');
        else
            header('Location: errorRefugios.php');
        
    }
    
    insertar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>