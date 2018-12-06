<?php $pagina = 'administradores' ?>
<?php include('../includes/cabeceraAdmin.php')?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
   <div class="panel-heading">
    Listado de Administradores
  </div>
  <div class="panel-body">

    <div class="alert alert-danger alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>¡Error al Ejecutar la Operacion!</strong> Verifique que los datos ingresados seas correctos.
    </div>

  <div class="table-responsive ">
  <div class="table-responsive ">
  <table class="table ">
  <thead class="thead-light">
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
          <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach ($usuario as $si):?>
        <tr>
            <th scope="row"><?php echo ($i+=1)?></th>
            <td><?php echo $si['nombre']?></td>
            <td><?php echo $si['contra']?></td>
            <td><?php echo $si['rol']?></td>    
            <td>
            <a class="btn btn-primary" 
            href="editarUsuario.php?idUsuario=<?php echo($si['id'])?>">Editar</a>
            </td>
            <td><a class="btn btn-danger" 
            href="borrarUsuario.php?idUsuario=<?php echo($si['id'])?>">Eliminar</a></td>
        </tr>
    <?php endforeach?>
    </tbody>
  </table>
</div>
  </div>
  <a href="agregarUsuario.php"
  class="btn btn-lg btn-block btn-success">Agregar Usuario</a>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>