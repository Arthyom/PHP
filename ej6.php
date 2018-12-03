<?php
    /// crear arcvivo cada vez que se carga la pagina
    $nombreArchivo = 'archivoBase.txt';
    $archivoBase = fopen($nombreArchivo, 'w+');
    fclose($archivoBase);



?>