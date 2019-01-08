<?php 

try {

    

    include('../includes/data.php');
    

    function update($pdoCon){
        $id = $_POST['idMascotaDB'];
        $nombre = $_POST['nombre'];
        $color = $_POST['color'];
        $edad = $_POST['edad'];
        $historia = $_POST['historia'];
        $hMedico = $_POST['hMedico'];
        $imagen = $_POST['imagen'];
        $rId = $_POST['refugios_id'];
        $raza = $_POST['raza'];

        $date = new DateTime();
        $ruta = '../images/'. $date->format('YmdHis').'.jpeg';
       move_uploaded_file($_FILES["mascotaImagen"]["tmp_name"],$ruta);
       


        $con = "UPDATE mascotas 
        SET nombre='$nombre', raza='$raza', color='$color', edad=$edad,
        historia='$historia', hMedico='$hMedico', 
        imagen='$ruta', refugios_id=$rId WHERE id = $id";


        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        //else
            //header('Location: errorMascotas.php');
        
    }
    
    update($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>