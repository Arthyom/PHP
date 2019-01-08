<?php

try {
    // funciones basicas, selects completos de las tablas 
    function todoMascotas($pdoCon)
    {
        $tM = $pdoCon->prepare('SELECT * FROM mascotas');
        $tM->execute();
        $resultado = $tM->fetchAll();

        return $resultado;
    }

    function todoRefugios($pdoCon)
    {
        $tr = $pdoCon->prepare('SELECT * FROM refugios');
        $tr->execute();
        $resultado = $tr->fetchAll();

        return $resultado;
    }

    function todoUsuarios($pdoCon)
    {
        $tu = $pdoCon->prepare('SELECT * FROM usuarios');
        $tu->execute();
        $resultado = $tu->fetchAll();

        return $resultado;
    }

    function todoSolicitudes($pdoCon)
    {
        $ts = $pdoCon->prepare('SELECT * FROM solicitudes');
        $ts->execute();
        $resultado = $ts->fetchAll();

        return $resultado;
    }

    function todoPropietarios($pdoCon)
    {
        $tp = $pdoCon->prepare('SELECT * FROM propietarios');
        $tp->execute();
        $resultado = $tp->fetchAll();

        return $resultado;
    }
  
    function refugioById($pdoCon,$id)
    {
        $tp = $pdoCon->prepare("SELECT * FROM refugios WHERE id = $id");
        $tp->execute();
        $resultado = $tp->fetch();

        return $resultado['nombre'];
    }

    function usuarioById($pdoCon,$id)
    {
        $tp = $pdoCon->prepare("SELECT * FROM usuarios WHERE id = $id");
        $tp->execute();
        $resultado = $tp->fetch();

        return $resultado['nombre'];
    }

    function usuarioArrayById($pdoCon,$id)
    {
        $tp = $pdoCon->prepare("SELECT * FROM usuarios WHERE id = $id");
        $tp->execute();
        $resultado = $tp->fetch();

        return $resultado;
    }

    function mascotaById($pdoCon,$id)
    {
        $tp = $pdoCon->prepare("SELECT * FROM mascotas WHERE id = $id");
        $tp->execute();
        $resultado = $tp->fetch();

        return $resultado['nombre'];
    }

    function getPDOCON (){
        $pdoCon = new PDO (
            'mysql:host=localhost;dbname=petsJungle',
            'frodo',
            ''
        );
        return $pdoCon;
    }



    // llamar a las funciones para cargar arrays de distribucion
    $pdoCon = getPDOCON();
    $mascota = todoMascotas($pdoCon);
    $refugio = todoRefugios($pdoCon);
    $usuario = todoUsuarios($pdoCon);
    $solicitud = todoSolicitudes($pdoCon);
    $propietario = todoPropietarios($pdoCon);


} catch (\Throwable $th) {
    echo 'no se puede conectar con la base de datos';
}

?>