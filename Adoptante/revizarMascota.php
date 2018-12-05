<?php $pagina = 'mascotas' ?>
<?php include_once('../includes/cabeceraAdoptante.php') ?>

<?php $id = $_GET['idMascota']?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
   <div class="panel-heading">
    Revizar Mascota
  </div>
  <div class="panel-body">
  <div class="row">
    <div class="col-md-8">
        <img h src="../img/g.jpg" class="thumbnail" width="300" height="370">
    </div>

    <div class="col-md-4">
        <span class="label label-default">Nombre</span> <label><?php echo($mascota[$id-1]['nombre'])?></label><br/>
        <span class="label label-default">Edad</span>   <label><?php echo($mascota[$id-1]['edad'])?></label><br/>
        <span class="label label-default">Raza</span>   <label><?php echo($mascota[$id-1]['raza'])?></label><br/>
        <span class="label label-default">Color</span>  <label><?php echo($mascota[$id-1]['color'])?></label><br/>
        <span class="label label-default">Historia</span> <label><?php echo($mascota[$id-1]['historia'])?></label><br/>
        <span class="label label-default">Historial Clinico</span> <label><?php echo($mascota[$id-1]['hMedico'])?></label><br/>
    </div>
  </div>

    <div class="row">
    <div class="col-md-6">
        <a href="" class="btn btn-block btn-success">Adoptar</a>
     </div>
     <div class="col-md-6">
     <a href="index.php" class="btn btn-block btn-danger">Salir</a>
     </div>
     </div>

  </div>
  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>
</div>