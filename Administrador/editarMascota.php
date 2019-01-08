<?php $pagina = 'mascotas' ?>
<?php include_once('../includes/cabeceraAdmin.php') ?>

<?php $id =  $_GET['idMascota']?>

<div class="panel panel-primary"  align="center" style="padding:1.5%">

  <div class="panel-heading">
    Revizar Mascota
  </div>

  <div class="panel-body">
      <div class="row">
        <div class="col-md-7">
          <img  src="<?php if($mascota[$id-1]['imagen']!=null)
          echo($mascota[$id-1]['imagen']);else echo '../images/perro.jpg';?>" 
          class="thumbnail" wnameth="300" height="370">
        </div>
<form action="updateMascotas.php" method="post" 
enctype="multipart/form-data" class="form-horizontal">
      <div class="col-md-5">
          <div class="form-group ">
            <label  class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
            <input  type="text" value="<?php echo($mascota[$id-1]['nombre'])?>" class="form-control form-control-sm" name="nombre" 
            placeholder="Nombre de la Mascota">
            <input type="hidden" value="<?php echo $mascota[$id-1]['id']?>"  
            name="idMascotaDB">
            </div>
          </div>

      <div class="form-group row">
        <label for="raza" class="col-sm-2 control-label">Raza</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($mascota[$id-1]['raza'])?>" class="form-control form-control-sm"  name="raza" 
        placeholder="Raza de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Edad</label>
        <div class="col-sm-10">
        <input type="text" value="<?php echo($mascota[$id-1]['edad'])?>" 
        class="form-control form-control-sm"  name="edad" 
        placeholder="Edad de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="edad" class="col-sm-2 control-label">Color</label>
        <div class="col-sm-10">
        <input required type="text" value="<?php echo($mascota[$id-1]['color'])?>" 
        class="form-control form-control-sm"  name="color"
        placeholder="Edad de la Mascota">
        </div>
      </div>

      <div class="form-group row">
        <label for="historia" class="col-sm-2 control-label">Historia</label>
        <div class="col-sm-10">
        <textarea  class="form-control form-control-sm"  
        name="historia" placeholder="Edad de la Mascota"><?php echo($mascota[$id-1]['historia']);?>
        </textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="hclinico" class="col-sm-2 control-label">Historial Clinico</label>
        <div class="col-sm-10">
        <textarea  class="form-control form-control-sm"  name="hclinico"
        placeholder="Historial Clinico de la Mascota"><?php echo($mascota[$id-1]['hMedico'])?></textarea>
        </div>
      </div>

       <div class="form-group row">
        <label for="refugio" class="col-sm-2 control-label">Refugio</label>
        <div class="col-sm-10">
        <select class="form-control form-control-sm" name="refugios_id">
          <?php foreach($refugio as $ri):?>
          <option value="<?php echo $ri['id']?>">
            <?php echo $ri['nombre']?>
          </option>
          <?php endforeach?>
        </select>
        </div>
      </div>

       <div class="custom-file">
  <input type="file" class="custom-file-input" name="mascotaImagen" />
</div>

<br/>
     
 
    


      </div>
      </div>
  
      <div class="row">
      <div class="col-md-6">
        <input type="submit" value="Editar" 
        class="btn btn-block btn-success">
      </div>
      <div class="col-md-6">
        <a href="index.php" class="btn btn-block btn-danger">Cancelar</a>
      </div>
      </form>
      </div>

      
  </div>

  
  

  <div class="panel-footer">
  <?php include_once('../includes/pie.php') ?>
  </div>

</div>