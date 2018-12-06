<?php 

try {

    include('../includes/data.php');

    function solicitar($pdoCon){;
        $idS = $_GET['idSolicitud'];
        $est = true;

        $con = "UPDATE solicitudes 
        SET estado=$est WHERE id=$idS";

        $tp = $pdoCon->exec($con);
    }
    

    function update($pdoCon){
        $id = $_GET['idMascota'];
        $estado = true;

        $con = "UPDATE mascotas 
        SET  adoptado=$estado WHERE id = $id";

        $tp = $pdoCon->exec($con);
        
    }
    
    function asignar($pdoCon){;
        $idM = $_GET['idMascota'];
        $idU = $_GET['idUsuario'];
        $fec = "";

        $usuarioArray = usuarioArrayById($pdoCon,$idU);
        $numeroMascotas = $usuarioArray['tMascotas']+1;

        echo var_dump($usuarioArray);

        $con = 'INSERT INTO propietarios
        ( mascotas_id, usuarios_id)'.
        "VALUES ( $idM, $idU )";

        $conUs = "UPDATE usuarios SET 
        tMascotas=$numeroMascotas WHERE id= $idU";

        $tp =  $pdoCon->exec($con);
        $tp2 = $pdoCon->exec($conUs);
        echo var_dump($tp2);
        if($tp ==1 && $tp2 == 1)
            header('Location: solicitudes.php');
        //else
           echo 'no se puede borrar';
    }
    solicitar($pdoCon);
    update($pdoCon);
    asignar($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>