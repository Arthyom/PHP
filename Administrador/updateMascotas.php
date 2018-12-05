<?php 

try {

    

    include('../includes/data.php');
    

    function update($pdoCon){
        $id = $_GET['idMascota'];
        $nombre = $_GET['nombre'];
        $color = $_GET['color'];
        $edad = $_GET['edad'];
        $historia = $_GET['historia'];
        $hMedico = $_GET['hMedico'];
        $imagen = $_GET['imagen'];
        $rId = $_GET['refugios_id'];
        $raza = $_GET['raza'];
        $estado = false;

        $con = "UPDATE mascotas 
        SET nombre='$nombre', raza='$raza', color='$color', edad=$edad,
        historia='$historia', hMedico='$hMedico', 
        imagen='$imagen', adoptado=0, refugios_id=$rId WHERE id = $id";

        "VALUES ('$nombre', '$raza','$color' , $edad, '$historia', '$hMedico', 
        '$imagen',$estado , '1')";

        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        else
            echo 'no se puede borrar';
        
    }
    
    update($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>