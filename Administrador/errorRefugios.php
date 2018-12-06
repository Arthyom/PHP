<?php $pagina = 'refugios' ?>
<?php include('../includes/cabeceraAdmin.php')?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
   <div class="panel-heading">
    Listado de Refugios
  </div>
  <div class="panel-body">
  
  <div class="alert alert-danger alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>¡Error al Ejecutar la Operacion!</strong> Verifique que los datos ingresados seas correctos.
   </div>

  <div class="table-responsive ">
  <table class="table ">
  <thead class="thead-light">
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Ubicacion</th>
          <th scope="col">Telefono</th>
          <th scope="col">Horarios</th>
          <th scope="col">Mascotas</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($refugio as $ri):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th>
            <td><?php echo $ri['nombre']?></td>
            <td><?php echo $ri['direccion']?></td>
            <td><?php echo $ri['telefono']?></td>
            <td><?php echo $ri['horario']?></td>   
            <td><?php echo $ri['masctoas']?></td>    
            <td>
            <a class="btn btn-primary" 
            href="editarRefugio.php?idRefugio=<?php echo($ri['id'])?>">Editar</a>
            </td>
            <td><a class="btn btn-danger" 
            href="borrarRefugio.php?idRefugio=<?php echo($ri['id'])?>">Eliminar</a></td>
        </tr>
    <?php endforeach?>
    </tbody>
  </table>
</div>
<a href="agregarRefugio.php"class="btn btn-lg btn-block btn-success">Agregar Refugio</a>
  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>
