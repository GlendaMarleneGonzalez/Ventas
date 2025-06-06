
<table>
    <tr>
        <th> ID </th>
        <th> Usuario ID </th>
        <th> Venta ID</th>
        <th> Tipo </th>
        <th> Mensaje </th>
        <th> Fecha Envío </th>
        <th> Estado </th>
        <th> Acciones </th>
    </tr>

    <?php foreach ($datos6 as $dato) { ?>
        <tr>
            <td> <?php echo $dato['id']; ?> </td>
            <td> <?php echo $dato['usuario_id']; ?> </td>
            <td> <?php echo $dato['venta_id']; ?> </td>
            <td> <?php echo $dato['tipo']; ?> </td>
            <td> <?php echo $dato['mensaje']; ?> </td>
            <td> <?php echo $dato['fecha_envio']; ?> </td>
            <td> <?php echo $dato['estado']; ?> </td>
            
            <td> <button onclick="editarNotificaciones('<?php echo $dato['id']; ?>',
                                                       '<?php echo $dato['usuario_id']; ?>',
                                                       '<?php echo $dato['venta_id']; ?>',
                                                       '<?php echo $dato['tipo']; ?>',
                                                       '<?php echo $dato['mensaje']; ?>',
                                                       '<?php echo $dato['fecha_envio']; ?>',
                                                       '<?php echo $dato['estado']; ?>', 'notificaciones', 'frm_Not')"> Editar </button> </td>

            <td> <button onclick="eliminarNotificaciones('<?php echo $dato['id']; ?>','<?php echo 'notificaciones'; ?>')"> Eliminar </button> </td>
        </tr>
    <?php } ?>
</table>
