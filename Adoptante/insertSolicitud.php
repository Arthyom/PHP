<?php 

try {

    include('../includes/data.php');

    function solicitar($pdoCon){;
        $idM= $_GET['idMascota'];
        $idU = 1;
        $idR = 1;
        $est = false;
        $fec = "2018-02-01";
        $fer = "2018-02-06";

        $con = 'INSERT INTO solicitudes 
        (fecha, mascotas_id, usuarios_id, refugios_id, fechaRespuesta,
        estado)'.
        "VALUES ( '$fec',$idM, $idU, $idR, '$fer', '$est')";
        echo var_dump($con);
        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        else
            echo 'no se puede borrar';
        
    }
    

    function update($pdoCon){
        $id = $_GET['idMascota'];
        
        $estado = true;

        $con = "UPDATE mascotas 
        SET  adoptado=$estado WHERE id = $id";

        echo(var_dump($con));

        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if($tp ==1)
            header('Location: mascotas.php');
        else
            echo 'no se puede borrar';
        
    }
    
    solicitar($pdoCon);
    update($pdoCon);
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>