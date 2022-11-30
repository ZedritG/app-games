<legend class="text-center">
    <i class="glyphicon glyphicon-user"></i><b>Gestion de estudiantes</b> 
</legend>
<hr>


<br>
<br>
<?php if ($listadoPeriferico): ?>
    <table class="table table-stripe table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">ID
            </th>
            <th class="text-center">Cedula</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoPeriferico-> result() as $perifericoTemporal): ?>
            <tr>
                <td class="text-center"> <?php echo $perifericoTemporal->id_pf; ?> </td>
                <td class="text-center"> <?php echo $perifericoTemporal-> nombre_pf; ?></td>
                <td class="text-center"> <?php echo $perifericoTemporal-> compañia_pf; ?></td>
                <td class="text-center"> <?php echo $perifericoTemporal-> tamaño_pf; ?></td>
                <td class="text-center"> 
                <a href="<?php echo site_url('peripherals/editar'); ?>/<?php echo $perifericoTemporal->id_pf; ?>" class="glyphicon glyphicon-pencil btn btn-warning">Editar</a>
                <a href="<?php echo site_url('peripherals/borrar'); ?>/<?php echo $perifericoTemporal->id_pf; ?>" class="glyphicon glyphicon-trash btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
<?php else: ?>
    <h3><b>No existen estudiantes</b></h3>
<?php endif; ?>
