
<?php $pagina = "ofertas";?>
<?php require_once("includes/header.php")?>
<?php require_once("includes/funciones.php")?>

<h1>Ofertas</h1>

<div class="container">
      <!-- Example row of columns -->
    <div class="row">
        <?php foreach($datos as $i => $dato) echo listarOferta($i,$dato);?>
    </div>
</div>


<?php require_once("includes/footer.php")?>
