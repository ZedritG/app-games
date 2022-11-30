<legend class="text-center">
    <i class="glyphicon glyphicon-user"></i><b>Gestion de estudiantes</b> 
</legend>
<hr>

<center>
<a href="<?php echo site_url('estudiantes/nuevo')?>" class="btn btn-success">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar
      </a>
</center>
<br>
<br>
<?php if ($listadoTorneo): ?>
    <table class="table table-stripe table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">ID
            </th>
            <th class="text-center">Cedula</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Nombre</th>
            <th class="text_center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoTorneo-> result() as $torneoTemporal): ?>
            <tr>
                <td class="text-center"> <?php echo $torneoTemporal->id_tn; ?> </td>
                <td class="text-center"> <?php echo $torneoTemporal-> nombre_equipo_tn; ?></td>
                <td class="text-center"> <?php echo $torneoTemporal-> nombres_grupo_tn; ?></td>
                <td class="text-center"> <?php echo $torneoTemporal-> email_tn; ?></td>
                <td class="text-center"> 
                <a href="<?php echo site_url('tournaments/actualizar'); ?>/<?php echo $torneoTemporal->id_tn; ?>" class="glyphicon glyphicon-pencil btn btn-warning">Editar</a>
                <a href="<?php echo site_url('tournaments/borrar'); ?>/<?php echo $torneoTemporal->id_tn; ?>" class="glyphicon glyphicon-trash btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
<?php else: ?>
    <h3><b>No existen estudiantes</b></h3>
<?php endif; ?>
