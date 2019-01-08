<?php 

try {

    include('../includes/data.php');

    function solicitar($pdoCon){;
        session_start();
        $idM = $_GET['idMascota'];
        $idU = 0;
        $idR = $_GET['idRefugio'];
        $est = false;
        $fec = "2018-02-01";
        $fer = "2018-02-06";

        if( isset($_SESSION['admin'] ))
            $idU = $_SESSION['admin']['id'];
        else
            if( isset($_SESSION['user'] ))
                $idU = $_SESSION['user']['id'];

        

        $con = 'INSERT INTO solicitudes 
        (fecha, mascotas_id, usuarios_id, refugios_id, fechaRespuesta,
        estado)'.
        "VALUES ( '$fec',$idM, $idU, $idR, '$fer', '$est')";
        echo var_dump($con);
        $tp = $pdoCon->exec($con);
        echo var_dump($tp);
        if(!$tp)
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
  
        
    }
    
    solicitar($pdoCon);
    update($pdoCon);
    header('Location: okMascotas.php');
        
} catch (\Throwable $th) {
    echo 'Error inesperado';
}

?>