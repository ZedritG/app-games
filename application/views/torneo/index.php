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

      <h3 style="font-family:arial; color:white;"><b> Tournaments </b></h3>
      <hr />
      <form action="<?php echo site_url("tournaments/guardarTorneo")?>" method="post">
      <div class="form-group" style="color:white;">
          <label for="">Team Name</label>
          <input type="text" class="form-control" name="nombre_equipo_tn" placeholder="Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Group Names</label>
          <input type="text" class="form-control" name="nombres_grupo_tn1" placeholder="Group Name" required>
          <br>
          <input type="text" class="form-control" name="nombres_grupo_tn2" placeholder="Group Name" required>
          <br>
          <input type="text" class="form-control" name="nombres_grupo_tn3" placeholder="Group Name" required>
          <br>
          <input type="text" class="form-control" name="nombres_grupo_tn4" placeholder="Group Name" required>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">E-mail</label>
          <input type="email" class="form-control" name="email_tn" placeholder="Email" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
        <hr />
        <a href="<?php echo site_url('tournaments/nuevo'); ?>" class="btn btn-link">Signup</a>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>

    </div>

    </span>
  </div>