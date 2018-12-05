<?php include_once('../includes/cabeceraAdmin.php') ?>
<?php $id = $_GET['idRefugio']?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
  
  <div class="panel-heading">
    Revizar Mascota
  </div>

  <div class="panel-body">
      <div class="row">
        <div class="col-md-7">
          <img h src="../img/g.jpg" class="thumbnail" wnameth="300" height="370">
        </div>
<form action="updateRefugios.php" method="get" class="form-horizontal">
      <div class="col-md-5">
        
      <div class="form-group row">
        <label for="raza" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($refugio[$id-1]['nombre'])?>" 
        class="form-control form-control-sm"  name="nombre" 
        placeholder="Direccion del Refugio">

        <input type="text" hidden='true' value="<?php echo($id)?>" 
         name="idRefugio">
   
        </div>
      </div>

      <div class="form-group row">
        <label for="raza" class="col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($refugio[$id-1]['direccion'])?>"
         class="form-control form-control-sm"  name="direccion" 
        placeholder="Direccion del Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($refugio[$id-1]['telefono'])?>"
         class="form-control form-control-sm"  name="telefono" 
        placeholder="Telefono del Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Horario</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($refugio[$id-1]['horario'])?>" 
        class="form-control form-control-sm"  name="horario"
        placeholder="Horario en que abre el Refugio">
        </div>
      </div>

      <div class="form-group row">
        <label for="historia" class="col-sm-2 control-label">Total De Mascotas</label>
        <div class="col-sm-10">
        <input value="<?php echo($refugio[$id-1]['masctoas']);?>" 
        class="form-control form-control-sm"  
        name="tMascotas" placeholder="Total de Mascotas en el Refugio">
        </div>
      </div>

      <div class="custom-file">
  <input type="file" class="custom-file-input" name="customFileLang" lang="es">
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