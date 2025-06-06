
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Dirección</th>
    </tr>

    <?php foreach ($datos as $dato) { ?>
        <tr>
            <td><?php echo $dato['id']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['contacto']; ?></td>
            <td><?php echo $dato['direccion']; ?></td>
            <td>
                <button onclick="editarProveedor('<?php echo $dato['id']; ?>',
                                                 '<?php echo $dato['nombre']; ?>',
                                                 '<?php echo $dato['contacto']; ?>',
                                                 '<?php echo $dato['direccion']; ?>','proveedores', 'frm_pro')"> Editar </button>
                <button onclick="eliminarProveedor(<?php echo $dato['id']; ?>, '<?php echo 'proveedores'; ?>')"> Eliminar </button>
            </td>
        </tr>
    <?php } ?>
</table>

