<?php include_once('../includes/cabeceraAdmin.php') ?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
  
  <div class="panel-heading">
    Agregar Usuario
  </div>

  <div class="panel-body">
      <div class="row">
        <div class="col-md-7">
          <img h src="../img/g.jpg" class="thumbnail" wnameth="400" height="470">
        </div>
<form action="insertUsuario.php" method="get" class="form-horizontal">
      <div class="col-md-5">
          <div class="form-group ">
            <label  class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" value="" class="form-control form-control-sm" 
            name="nombre" 
            placeholder="Nombre de la Mascota">
            </div>
          </div>

      <div class="form-group row">
        <label for="raza" class="col-sm-2 control-label">Contraseña</label>
        <div class="col-sm-10">
        <input type="text" value="" class="form-control form-control-sm"
          name="contra" 
        placeholder="Raza de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Rol</label>
        <div class="col-sm-10">
        <input type="text" value="" class="form-control form-control-sm"  
        name="rol" 
        placeholder="Edad de la Mascota">
        </div>
      </div>


      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
        <input type="text" 
        class="form-control form-control-sm"  name="direccion" 
        placeholder="Edad de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
        <input type="text"  
        class="form-control form-control-sm"  name="telefono" 
        placeholder="Edad de la Mascota">
        </div>
      </div>

       <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Adoptados</label>
        <div class="col-sm-10">
        <input type="text" 
         class="form-control form-control-sm"  name="tMascotas" 
        placeholder="Edad de la Mascota">
        </div>
      </div>


      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Edad</label>
        <div class="col-sm-10">
        <input type="text"  
        class="form-control form-control-sm"  name="edad" 
        placeholder="Edad de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Peligro</label>
        <div class="col-sm-10">
        <input type="text"  
        class="form-control form-control-sm"  name="peligrocidad" 
        placeholder="Edad de la Mascota">
        </div>
      </div>


       <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Obsevarcion</label>
        <div class="col-sm-10">
        <textarea type="text"  class="form-control form-control-sm"  name="observaciones" 
        placeholder="Edad de la Mascota"></textarea>
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