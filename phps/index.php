<?php include("includes/funciones.php"); ?>
<?php include("includes/header.php"); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn  btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <?php foreach($datos as $i => $dato) if($i <5)echo listarOferta($i,$dato);?>
      </div>

      <hr>
   
<?php include("includes/footer.php"); ?>