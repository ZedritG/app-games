<!-- codigo para dar el estilo al login -->
<style>

.div-center {
  width: 1000px;
  height: 400px;
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
  padding: 0.1em 2em;
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

      <h3 style="font-family:arial; color:white;"><b> Peripherals </b></h3>
      <hr />
      <form action="<?php echo site_url("peripherals/guardarPeriferico")?>" method="post">
      <div class="form-group" style="color:white;">
          <label for="">Type</label>
          <input type="text" class="form-control" name="tipo_pf" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre_pf" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Company</label>
          <input type="text" class="form-control" name="compañia_pf" placeholder="Commpany" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Size</label>
          <input type="number" class="form-control" name="tamaño_pf" placeholder="Size" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
        <hr />
        <a href="<?php echo site_url('peripherals/nuevo'); ?>" class="btn btn-link">Signup</a>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>

    </div>

    </span>
  </div>