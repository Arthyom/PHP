<?php include_once('../includes/cabeceraAdmin.php') ?>


<div class="panel panel-primary"  align="center" style="padding:1.5%">
  
  <div class="panel-heading">
    Agregar Refugio
  </div>

  <div class="panel-body">
      <div class="row">
        <div class="col-md-7">
          <img h src="../img/g.jpg" class="thumbnail" width="300" height="370">
        </div>
<form action="" method="post" class="form-horizontal">
      <div class="col-md-5">
        
      <div class="form-group row">
        <label for="raza" class="col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
        <input type="text" value="" class="form-control form-control-sm"  id="raza" 
        placeholder="Direccion del Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
        <input type="text" value="" class="form-control form-control-sm"  id="edad" 
        placeholder="Telefono del Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Horario</label>
        <div class="col-sm-10">
        <input type="text" value="" class="form-control form-control-sm"  id="edad"
        placeholder="Horario en que abre el Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="historia" class="col-sm-2 control-label">Total De Mascotas</label>
        <div class="col-sm-10">
        <input value="" class="form-control form-control-sm"  
        id="historia" placeholder="Total de Mascotas en el Refugio">
        </div>
      </div>

      <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
</div>

     
 
    


      </div>
      </div>
  
      <div class="row">
      <div class="col-md-6">
        <input type="submit" value="Aceptar" class="btn btn-block btn-success">
      </div>
      <div class="col-md-6">
      <a href="index.php" class="btn btn-block btn-danger">Salir</a>
      </div>
      </form>
      </div>

      
  </div>

  
  

  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>

</div>