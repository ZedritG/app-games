<legend class="text-center">
    <i class="glyphicon glyphicon-user"></i><b>Gestion de estudiantes</b> 
</legend>
<hr>


<br>
<br>
<?php if ($listadoTrabajador): ?>
    <table class="table table-stripe table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">ID
            </th>
            <th class="text-center">Cedula</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Direccion</th>
            <th class="text-center">Fecha de nacimiento</th>
            <th class="text_center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoTrabajador-> result() as $trabajadorTemporal): ?>
            <tr>
                <td class="text-center"> <?php echo $trabajadorTemporal->id_tb; ?> </td>
                <td class="text-center"> <?php echo $trabajadorTemporal-> nombre_tb; ?></td>
                <td class="text-center"> <?php echo $trabajadorTemporal-> apellido_tb; ?></td>
                <td class="text-center"> <?php echo $trabajadorTemporal-> email_tb; ?></td>
                <td class="text-center"> <?php echo $trabajadorTemporal-> cedula_tb; ?></td>
                <td class="text-center"> <?php echo $trabajadorTemporal-> horas_tb; ?></td>
                <td class="text-center"> 
                <a href="<?php echo site_url('workers/editar'); ?>/<?php echo $trabajadorTemporal->id_tb; ?>" class="glyphicon glyphicon-pencil btn btn-warning">Editar</a>
                <a href="<?php echo site_url('workers/borrar'); ?>/<?php echo $trabajadorTemporal->id_tb; ?>" class="glyphicon glyphicon-trash btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
<?php else: ?>
    <h3><b>No existen estudiantes</b></h3>
<?php endif; ?>
