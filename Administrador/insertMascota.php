<?php 

try {

    include('../includes/data.php');

    function insertar($pdoCon){;
        $nombre = $_GET['nombre'];
        $color = $_GET['color'];
        $edad = $_GET['edad'];
        $historia = $_GET['historia'];
        $hMedico = $_GET['hMedico'];
        $imagen = $_GET['imagen'];
        $rId = $_GET['refugios_id'];
        $raza = $_GET['raza'];
        $estado = false;

        $con = 'INSERT INTO mascotas 
        (nombre, raza, color, edad, historia, hMedico, 
        imagen, adoptado, refugios_id)'.
        "VALUES ('$nombre', '$raza','$color' , $edad, '$historia', '$hMedico', 
        '$imagen', '$estado', '1')";

        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        else
            echo 'no se puede borrar';
        
    }
    
    insertar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>