<?php include('../includes/data.php')?>



<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
          <span><img src="../images/d2.png" 
          width="30" height="30" class="d-inline-block align-bottom"> 
         </span>
          PetsJungle 
          </a>
          </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($pagina == 'refugios')echo 'active'?>"><a href="refugios.php">Refugios</a></li>
            <li class="<?php if($pagina == 'mascotas')echo 'active'?>"><a href="mascotas.php">Mascotas</a></li>
            <li class="<?php if($pagina == 'administradores')echo 'active'?>"><a href="administradores.php">Usuarios</a></li>
            <li class="<?php if($pagina == 'solicitudes')echo 'active'?>"><a href="solicitudes.php">
            Solicitudes <span class="badge badge-danger"><?php echo(count($solicit))?></span></a></li>
          </ul>

        
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Cerrar Secion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>