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
      <form action="<?php echo site_url("invoice/guardarFactura")?>" method="post">
      <div class="form-group" style="color:white;">
          <label for="inputState">Name</label>
          <select id="inputState" class="form-control" name="fk_id_lt" id="fk_id_lt" required>
                <option selected>Elegir Lista</option>
                <?php if($listadoGames):?>
                <?php foreach($listadoGames->result() as $listaTemporal):?>
                <option value="<?php echo $listaTemporal->id_lt;?>">
                    <?php echo $listaTemporal->nombre_lt;?>
                </option>
                <?php endforeach?>
                <?php endif?>

            </select>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Company</label>
          <select id="inputState" class="form-control" name="fk_id_tn" id="fk_id_tn" required>
                <option selected>Elegir Lista</option>
                <?php if($listadoTorneos):?>
                <?php foreach($listadoTorneos->result() as $torneoTemporal):?>
                <option value="<?php echo $torneoTemporal->id_tn;?>">
                    <?php echo $torneoTemporal->nombre_equipo_tn;?>
                </option>
                <?php endforeach?>
                <?php endif?>

            </select>
        </div>
        <div class="form-group" style="color:white;">
          <label for="">Year</label>
          <input type="date" class="form-control" name="años_lt" placeholder="Year" required>
        </div>
        
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo site_url('games/index')?>" class="btn btn-primary">
        Cancelar
        </a>
        <hr />
        <button type="button" class="btn btn-link">Signup</button>
        <button type="button" class="btn btn-link">Reset Password</button>

      </form>

    </div>

    </span>

  </div>

  
