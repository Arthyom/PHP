<?php $pagina = 'mascotas' ?>
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
          <th scope="col">Nombre</th>
          <th scope="col">Raza</th>
          <th scope="col">Edad</th>
          <th scope="col">Color</th>
          <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($mascota as $mi):?>
        <?php if(!$mi['adoptado']):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th>
            <td><?php echo $mi['nombre']?></td>
            <td><?php echo $mi['raza']?></td>
            <td><?php echo $mi['edad']?></td>
            <td><?php echo $mi['color']?></td>     
            <td><a class="btn btn-success" 
            href="insertSolicitud.php?idMascota=<?php echo($mi['id'])?>">
            Adoptar</a></td>
            
            <td>
            <a class="btn btn-primary" 
            href="revizarMascota.php?idMascota=<?php echo($mi['id'])?>">
            Revizar</a></td>
        </tr>
        <?php endif?>
    <?php endforeach?>
    </tbody>
  </table>
</div>
  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>