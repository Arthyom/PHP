<?php $pagina = 'index' ?>
<?php include_once('../includes/cabeceraAdoptante.php');session_start(); ?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>¡Bienvenido, <?php echo $_SESSION['user']['nombre']?>!</h1>
        <p>Nos alegra tenerlo de vuelta, revice las nuevas 
        tiernas y adorables mascotas que tenemos para usted, 
        puede adoptar cuantas quiera pero primero debe hacer 
        una solicitud de adopcion</p>
        <p><a class="btn btn-primary btn-lg" 
        href="mascotas.php" role="button">Adoptar Mascotas &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <?php foreach($mascota as $mi): ?>
      <?php if(!$mi['adoptado']): ?>
        <div class="col-md-3">
          <h2><?php echo $mi['nombre']?></h2>
          <hr width="210"/>
          <img src="<?php if($mi['imagen']!=null)
          echo $mi['imagen']; else echo '../img/g.jpg';?>"
           class="thumbnail" width="200" height="250">
          <p><?php echo $mi['historia']?></p>
          <p><a class="btn btn-warning" 
          href="mascotas.php" role="button">
          Ver Mascotas &raquo;</a></p>
        </div>
        <?php endif?>
        <?php endforeach ?>
      </div>
    </div>

      <hr>

<?php include_once('../includes/pie.php') ?>


   