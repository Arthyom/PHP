<?php $pagina = 'index' ?>
<?php include('../includes/cabeceraAdmin.php');session_start();?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>¡Bienvenido, <?php echo $_SESSION['admin']['nombre']?>!</h1>
        <p>Esperamos que este difrutando de PetsJungle 
        y los nuevos y fascinantes servicios y funcionalidades
        que ofrece para que su refugio cresca  y sea más conocido.
        ¿Ya revizo las solicitudes de adoptcion?</p>
        <p><a class="btn btn-primary btn-lg" href="solicitudes.php" 
        role="button">Revizar Solicitudes &raquo;</a></p>
      </div>
    </div>


  
    <div class="container">
      <div class="row">
      <?php foreach($mascota as $mi): ?>
      <?php if(!$mi['adoptado']): ?>
        <div class="col-md-4">
          <h2><?php echo $mi['nombre']?></h2>
          <hr width="210"/>
          <img src="<?php if($mi['imagen']!=null)
          echo $mi['imagen']; else echo '../img/g.jpg';?>"
           class="thumbnail" width="200" height="250">
          <p><?php echo $mi['historia']?></p>
          <p><a class="btn btn-warning" href="mascotas.php" role="button">
          Ver Mascotas &raquo;</a></p>
        </div>
        <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
    
      <hr>

<?php include_once('../includes/pie.php') ?>


   