<?php 

try {

    

    include('../includes/data.php');
    

    function insertar($pdoCon){
        $nom = $_GET['nombre'];
        $cnt = $_GET['contra'];
        $tms = $_GET['tMascotas'];
        $pel = $_GET['peligrocidad'];
        $tel = $_GET['telefono'];
        $dir = $_GET['direccion'];
        $edd = $_GET['edad'];
        $obs = $_GET['observaciones'];
        $rol = $_GET['rol'];

        $con = 'INSERT INTO usuarios 
        ( contra, nombre, tMascotas, peligrocidad, telefono, direccion, edad,
        observaciones, rol)'.
        "VALUES ('$cnt', '$nom',$tms , '$pel', '$tel', '$dir', $edd,
        '$obs', '$rol')";

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: administradores.php');
        else
            echo 'no se puede borrar';
        
    }
    
    insertar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>