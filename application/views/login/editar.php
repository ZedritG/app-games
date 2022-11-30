<!-- codigo para dar el estilo a la lista deberia ir en una carpeta css -->
<style>

.div-center {
  width: 1000px;
  height: 500px;
  background-color: #151A1D;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
  border-radius: 15px;
  opacity: 0.9;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}
</style>

<!--Funcion del login -->
<div class="back">

  <div class="div-center">

    <div class="content">

      <h3 style="font-family:arial; color:white;"><b> Enter Game Fields </b></h3>
      <hr />
      <?php if ($loginEditar): ?> 
      <form action="<?php echo site_url("logins/procesarActualizacion")?>" method="post">
      <center>
            <input type="hidden" name="id_lg" value="<?php echo $loginEditar->id_lg; ?>" method="post">
        </center>
      <div class="form-group" style="color:white;">
          <label for="">Name</label>
          <input type="text" class="form-control" name="nombre_lg" value="<?php echo $loginEditar->nombre_lg; ?>" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Company</label>
          <input type="text" class="form-control" name="apellido_lg" value="<?php echo $loginEditar->apellido_lg; ?>" placeholder="Company" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Year</label>
          <input type="text" class="form-control" name="email_lg" value="<?php echo $loginEditar->email_lg; ?>" placeholder="Year" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Price</label>
          <input type="text" class="form-control" name="contraseña_lg" value="<?php echo $loginEditar->contraseña_lg; ?>" placeholder="Price" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo site_url('logins/index')?>" class="btn btn-primary">
        Cancelar
        </a>
        <hr />
        <button type="button" class="btn btn-link">Signup</button>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>
      <?php else: ?>
                <!-- <?php print_r($loginEditar);?>!-->

            <div class="alert alert-danger">
                <b>No se encontro el estudiante :d</b>
            </div>
        <?php endif; ?>

    </div>
    </span>
    <div class="row text-center">
    <div class="col-md-12">
      <a href="<?php echo site_url('logins/index')?>" class="btn btn-primary text-center">
        <i class="glyphicon glyphicon-pencil"></i>
        Volver
      </a>
    </div>
  </div>  
  </div>