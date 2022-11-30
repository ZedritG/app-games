<!-- codigo para dar el estilo al login -->
<style>

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
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

      <h3>Sign up</h3>
      <hr />
      <form action="<?php echo site_url("logins/guardarLogin")?>" method="post">
      <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="nombre_lg" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" name="apellido_lg" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <label for="">Email address</label>
          <input type="email" name="email_lg" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="contraseña_lg" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <hr />
        <a href="<?php echo site_url('logins/nuevo'); ?>" class="btn btn-link">Signup</a>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>

    </div>

    </span>
  </div>