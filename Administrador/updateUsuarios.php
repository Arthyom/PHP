<?php 

try {

    

    include('../includes/data.php');
    

    function actualizar($pdoCon){
        $id  =  $_GET['idUsuarioDB'];
        $nom = $_GET['nombre'];
        $cnt = $_GET['contra'];
        $tms = $_GET['tMascotas'];
        $pel = $_GET['peligrocidad'];
        $tel = $_GET['telefono'];
        $dir = $_GET['direccion'];
        $edd = $_GET['edad'];
        $obs = $_GET['observaciones'];
        $rol = $_GET['rol'];

        $con = "UPDATE usuarios 
        SET contra='$cnt', nombre='$nom', tMascotas=$tms, peligrocidad='$pel', 
        telefono='$tel', direccion='$dir', edad=$edd,
        observaciones='$obs', rol='$rol' WHERE id = $id";
         echo var_dump($con);

        $tp = $pdoCon->exec($con);
       
        if($tp ==1)
            header('Location: administradores.php');
        else
            header('Location: errorAdministradores.php');
        
    }
    
    actualizar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>