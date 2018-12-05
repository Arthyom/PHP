<?php $pagina = 'solicitudes' ?>
<?php include_once('../includes/cabeceraAdoptante.php') ?>


<div class="panel panel-primary"  align="center" style="padding:1.5%">
   <div class="panel-heading">
    Listado de Mascotas
  </div>
  <div class="panel-body">
  <div class="table-responsive ">
  <table class="table ">
  <thead class="thead-light">
      <tr>
          <th scope="col">#</th>
          <th scope="col">Refugio</th>
          <th scope="col">Mascota</th>
          <th scope="col">Respuesta</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($solicit as $si):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th>
            <td><?php echo $si['idUsuario']?></td>
            <td><?php echo $si['idMascota']?></td>    
            <td><?php if($si['aceptada']) echo 'Aceptada'; else echo 'Rechazada'; ?></td>
        </tr>
    <?php endforeach?>
    </tbody>
  </table>
  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>









