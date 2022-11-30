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
      <?php if ($torneoEditar): ?> 
      <form action="<?php echo site_url("tournaments/procesarActualizacion")?>" method="post">
      <center>
            <input type="hidden" name="id_tn" value="<?php echo $torneoEditar->id_tn; ?>" method="post">
        </center>
      <div class="form-group" style="color:white;">
          <label for="">Name</label>
          <input type="text" class="form-control" name="nombre_equipo_tn" value="<?php echo $torneoEditar->nombre_equipo_tn; ?>" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Group Name</label>
          <input type="text" class="form-control" name="nombres_grupo_tn" value="<?php echo $torneoEditar->nombres_grupo_tn; ?>" placeholder="Company" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Email</label>
          <input type="date" class="form-control" name="email_tn" value="<?php echo $torneoEditar->email_tn; ?>" placeholder="Year" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo site_url('tournaments/index')?>" class="btn btn-primary">
        Cancelar
        </a>
        <hr />
        <button type="button" class="btn btn-link">Signup</button>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>
      <?php else: ?>
                <!-- <?php print_r($torneoEditar);?>!-->

            <div class="alert alert-danger">
                <b>No se encontro el estudiante :d</b>
            </div>
        <?php endif; ?>

    </div>
    </span>
    <div class="row text-center">
    <div class="col-md-12">
      <a href="<?php echo site_url('tournaments/index')?>" class="btn btn-primary text-center">
        <i class="glyphicon glyphicon-pencil"></i>
        Volver
      </a>
    </div>
  </div>  
  </div>