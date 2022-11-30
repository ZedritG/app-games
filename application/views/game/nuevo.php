<legend class="text-center">
    <i class="glyphicon glyphicon-user"></i><b>Gestion de estudiantes</b> 
</legend>
<hr>


<br>
<br>
<?php if ($listadoGames): ?>
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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoGames-> result() as $listaTemporal): ?>
            <tr>
                <td class="text-center"> <?php echo $listaTemporal->id_lt; ?> </td>
                <td class="text-center"> <?php echo $listaTemporal-> nombre_lt; ?></td>
                <td class="text-center"> <?php echo $listaTemporal-> compañia_lt; ?></td>
                <td class="text-center"> <?php echo $listaTemporal-> años_lt; ?></td>
                <td class="text-center"> <?php echo $listaTemporal-> precio_lt; ?></td>
                <td class="text-center"> 
                <a href="<?php echo site_url('games/editar'); ?>/<?php echo $listaTemporal->id_lt; ?>" class="glyphicon glyphicon-pencil btn btn-warning">Editar</a>
                <a href="<?php echo site_url('games/borrar'); ?>/<?php echo $listaTemporal->id_lt; ?>" class="glyphicon glyphicon-trash btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
<?php else: ?>
    <h3><b>No existen estudiantes</b></h3>
<?php endif; ?>
