<?php
    try {
        $pdo = new PDO ("mysql:host=localhost; dbname=CaadiIntegrada", "frodo","");
        $consulta = $pdo->prepare("SELECT * FROM Students");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);

    } catch (\Throwable $th) {
        die("No se puede gener la aplicacion!");
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

    <?php foreach($resultado as $i => $ci): ?>
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