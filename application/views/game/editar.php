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
        <?php if ($listaEditar): ?> 
      <form action="<?php echo site_url("games/procesarActualizacion")?>" method="post">
      <center>
            <input type="hidden" name="id_lt" value="<?php echo $listaEditar->id_lt; ?>" method="post">
        </center>
      <div class="form-group" style="color:white;">
          <label for="">Name</label>
          <input type="text" class="form-control" name="nombre_lt" value="<?php echo $listaEditar->nombre_lt; ?>" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Company</label>
          <input type="text" class="form-control" name="compañia_lt" value="<?php echo $listaEditar->compañia_lt; ?>" placeholder="Company" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Year</label>
          <input type="date" class="form-control" name="años_lt" value="<?php echo $listaEditar->años_lt; ?>" placeholder="Year" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Price</label>
          <input type="text" class="form-control" name="precio_lt" value="<?php echo $listaEditar->precio_lt; ?>" placeholder="Price" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo site_url('games/index')?>" class="btn btn-primary">
        Cancelar
        </a>
        <hr />
        <button type="button" class="btn btn-link">Signup</button>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>
      <?php else: ?>
                <!-- <?php print_r($listaEditar);?>!-->

            <div class="alert alert-danger">
                <b>No se encontro el estudiante :d</b>
            </div>
        <?php endif; ?>
    </div>
    </span>
    <div class="row text-center">
    <div class="col-md-12">
      <a href="<?php echo site_url('games/index')?>" class="btn btn-primary text-center">
        <i class="glyphicon glyphicon-pencil"></i>
        Volver
      </a>
    </div>
  </div>  
  </div>