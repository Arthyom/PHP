<?php $pagina = 'refugios' ?>
<?php include('../includes/cabeceraAdmin.php')?>

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
            <td><?php echo $ri['ubicacion']?></td>
            <td><?php echo $ri['telefono']?></td>
            <td><?php echo $ri['horarios']?></td>   
            <td><?php echo $ri['mascotas']?></td>    
            <td>
            <a class="btn btn-primary" 
            href="editarRefugio.php?idRefugio=<?php echo($i)?>">Editar</a>
            </td>
            <td>
            <form action="" method="post">
            <input type="submit" value="Eliminar" class="btn btn-danger">
            </form>
            </td>
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
