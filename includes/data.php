<?php
//raza, edad, historia, color, historial clínico
//ubicación, teléfono, horarios

$mascota = array();
$admin   = array();
$solicit = array();
$refugio = array();

$mascota[] = array(
 'raza'=>'ratonero',
 'edad'=>5,
 'color'=>'deslavado',
 'hclinico'=>'tiene moquillo',
 'adoptado'=>false,
 'historia'=>'deslavado',
    'nombre'=>'deslavado',
);

$mascota[] = array(
    'raza'=>'ratonero',
    'edad'=>5,
    'color'=>'deslavado',
    'hclinico'=>'tiene moquillo',
    'adoptado'=>false,
    'historia'=>'deslavado',
    'nombre'=>'deslavado',
   );

$mascota[] = array(
    
    'raza'=>'ratonero',
    'edad'=>5,
    'color'=>'deslavado',
    'historia'=>'deslavado',
    'nombre'=>'deslavado',
    'hclinico'=>'tiene moquillo',
    'adoptado'=>false
   );
   

$usuario[] = array(
    'rol'=>'admin',
    'nombre'=>'admin1',
    'contra'=>'1234'
);

$usuario[] = array(
    'rol'=>'user',
    'nombre'=>'user1',
    'contra'=>'0000',
    'tMascotas'=>4,
    'ingresoMensual'=>150.0,
    'estatus'=>'bueno',
    'observaciones'=>'le pego a un perro',
    'estatus'=>'bueno',
    'telefono'=>'',
    'direccion'=>'',
    'edad'=>15
);

$usuario[] = array(
    'rol'=>'user',
    'nombre'=>'user1',
    'contra'=>'0000',
    'tMascotas'=>4,
    'ingresoMensual'=>150.0,
    'estatus'=>'bueno',
    'observaciones'=>'le pego a un perro',
    'estatus'=>'bueno',
    'telefono'=>'',
    'direccion'=>'',
    'edad'=>15
);

$solicit[] = array(
    'idUsuario' =>1,
    'idMascota' =>1,
    'aceptada'  =>false
);

$solicit[] = array(
    'idUsuario' =>1,
    'idMascota' =>1,
    'aceptada'  =>true
);

$solicit[] = array(
    'idUsuario' =>1,
    'idMascota' =>1,
    'aceptada'  =>true
);

$refugio[] = array(
    'ubicacion'=>'Calle benito juarez #27 de moroleon',
    'telefono'=>'445 734 34 156',
    'horarios'=>'10:00 a.m. - 08:00 p.m.',
    'mascotas'=>4
);

$refugio[] = array(
    'ubicacion'=>'Calle benito juarez #27 de moroleon',
    'telefono'=>'445 734 34 156',
    'horarios'=>'10:00 a.m. - 08:00 p.m.',
    'mascotas'=>4

);

$refugio[] = array(
    'ubicacion'=>'Calle benito juarez #27 de moroleon',
    'telefono'=>'445 734 34 156',
    'horarios'=>'10:00 a.m. - 08:00 p.m.',
    'mascotas'=>4
);