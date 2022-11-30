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
      <form action="<?php echo site_url("games/guardarLista")?>" method="post">
      <div class="form-group" style="color:white;">
          <label for="">Name</label>
          <input type="text" class="form-control" name="nombre_lt" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Company</label>
          <input type="text" class="form-control" name="compañia_lt" placeholder="Company" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Year</label>
          <input type="date" class="form-control" name="años_lt" placeholder="Year" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Price</label>
          <input type="text" class="form-control" name="precio_lt" placeholder="Price" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>

        <a href="<?php echo site_url('games/index')?>" class="btn btn-primary">
        Cancelar
        </a>
        <hr />
        <a href="<?php echo site_url('games/nuevo'); ?>" class="btn btn-link">Signup</a>

        <button type="button" class="btn btn-link">Reset Password</button>

      </form>

    </div>

    </span>

  </div>

  
