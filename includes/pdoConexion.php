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
  

    $pdoCon = new PDO (
        'mysql:host=localhost;dbname=petsJungle',
        'frodo',
        ''
    );

    // llamar a las funciones para cargar arrays de distribucion
    $mascota = todoMascotas($pdoCon);
    $refugio = todoRefugios($pdoCon);
    $usuario = todoUsuarios($pdoCon);
    $solicitud = todoSolicitudes($pdoCon);
    $propietario = todoPropietarios($pdoCon);


} catch (\Throwable $th) {
    echo 'no se puede conectar con la base de datos';
}