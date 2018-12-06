<?php $pagina = 'solicitudes' ?>
<?php include('../includes/cabeceraAdmin.php')?>
<?php $pdoConExt = getPDOCON() ?>


<div class="panel panel-primary"  align="center" style="padding:1.5%">
   <div class="panel-heading">
    Listado de Refugios
  </div>
  <div class="panel-body">
  <div class="table-responsive ">
  <table class="table ">
  <thead class="thead-light">
      <tr>
          <th scope="col">#</th>
          <th scope="col">Usuario</th>
          <th scope="col">Mascota</th>
          <th scope="col">Refugio</th>
          <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($solicitud as $si):?>
        <?php if(!$si['estado']):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th> 
            <td><?php echo usuarioById($pdoConExt, $si['usuarios_id'])?></td>
            <td><?php echo mascotaById($pdoConExt, $si['mascotas_id'])?></td>
            <td><?php echo refugioById($pdoConExt, $si['refugios_id'])?></td> 
            <td><a 
            class="btn btn-primary" 
            href=
            "aceptar.php?idMascota=<?php echo($si['mascotas_id'])?>
            &idUsuario=<?php echo($si['usuarios_id'])?>
            &idUsuario=<?php echo($si['usuarios_id'])?>
            &idSolicitud=<?php echo($si['id'])?>">Aceptar</a></td>
            <td><a 
            class="btn btn-danger" 
            href=
            "rechazar.php?idSolicitud=<?php echo($si['id'])?>
            &idMascota=<?php echo($si['mascotas_id'])?>">Rechazar</a></td>
        </tr>
    <?php endif ?>
    <?php endforeach?>
    </tbody>
  </table>
 
  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>

