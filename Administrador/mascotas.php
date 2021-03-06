<?php $pagina = 'mascotas' ?>
<?php include('../includes/cabeceraAdmin.php')?>
<?php $pdoConExt = getPDOCON() ?>

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
          <th scope="col">Raza</th>
          <th scope="col">Raza</th>
          <th scope="col">Edad</th>
          <th scope="col">Color</th>
          
          <th scope="col">Refugio</th>
          <th scope="col">Estado</th>
          <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($mascota as $mi):?>
        <?php if(true):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th>
            <td><?php echo $mi['nombre']?></td>
            <td><?php echo $mi['raza']?></td>
            <td><?php echo $mi['edad']?></td>
            <td><?php echo $mi['color']?></td> 
            <td><?php echo refugioById($pdoConExt, $mi['refugios_id'])?></td>
            <td><?php if($mi['adoptado'])
             echo 'Adoptado/Espera'; else echo 'Libre'; ?></td>     
            <td>
            <a class="btn btn-primary" 
            href="editarMascota.php?idMascota=<?php echo$i?>">Editar</a>
            </td>
            
            <td><a class="btn btn-danger" 
            href="borrarMascota.php?idMascota=<?php echo($mi['id'])?>">Eliminar</a></td>
        </tr>
        <?php endif?>
    <?php endforeach?>
    </tbody>
  </table>
</div>
<a href="agregarMascota.php"
class="btn btn-lg btn-block btn-success">Agregar Mascotas</a>
  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>


