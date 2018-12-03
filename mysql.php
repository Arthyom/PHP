<?php
    try {
        mysqli_report( MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $baseDatos = new mysqli("localhost","frodo","","CaadiIntegrada");

        $resultado = $baseDatos->query("SELECT * FROM Students");
        $columna = array();

        while($arr = $resultado->fetch_object())
            $columna[] = $arr;

    } catch (Exception $ex) {
        die("Ocurrienron errores al conectar ".$baseDatos->connect_error);   
    }

?>


<table>
    <tr>
        <th>#</th>
        <th>NUA</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
    </tr>

    <?php foreach($columna as $i => $ci): ?>
    <?php if($ci->visible):?>
    <tr>
            <td> <?php echo $i ?></td>
            <td> <?php echo $ci->nua?></td>
            <td> <?php echo $ci->name?></td>
            <td> <?php echo $ci->firstLastName?></td>
            <td> <?php echo $ci->secondLastName?></td>
        
    </tr>
    <?php endif;?>
    <?php endforeach;?>
</table>