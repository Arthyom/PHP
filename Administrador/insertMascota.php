<?php 

try {

    include('../includes/data.php');

    function insertar($pdoCon){;
        $nombre = $_POST['nombre'];
        $color = $_POST['color'];
        $edad = $_POST['edad'];
        $historia = $_POST['historia'];
        $hMedico = $_POST['hMedico'];
        $date = new DateTime();
        $ruta = '../images/'. $date->format('YmdHis').'.jpeg';
       move_uploaded_file($_FILES["mascotaImagen"]["tmp_name"],$ruta);
       
        
        

        $rId = $_POST['refugios_id'];
        $raza = $_POST['raza'];
        $estado = false;

        $con = 'INSERT INTO mascotas 
        (nombre, raza, color, edad, historia, hMedico, 
        imagen, adoptado, refugios_id)'.
        "VALUES ('$nombre', '$raza','$color' , $edad, 
        '$historia', '$hMedico', 
        '$ruta', '$estado', $rId)";

        $tp = $pdoCon->exec($con);

        if($tp ==1)
            header('Location: mascotas.php');
        else
            header('Location: errorMascotas.php');
        
    }
    
    insertar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>