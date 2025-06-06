<table>
    <tr>
        <th> ID </th>
        <th> Venta_ID </th>
        <th> Articulo_ID </th>
        <th> Cantidad </th>
        <th> Precio_unitario </th>
        <th> Acción </th>
    </tr>

    <?php foreach ($datos_d as $dato) { ?>
    <tr>
        <td> <?php echo $dato['id']; ?> </td>
        <td> <?php echo $dato['articulo_id']; ?></td>
        <td> <?php echo $dato['cantidad']; ?></td>
        <td> <?php echo $dato['precio_unitario']; ?></td>
        <td> <?php echo $dato['subtotal']; ?></td>
        <td><button onclick="editar('<?php echo $dato['id']; ?>','<?php echo 'Detalles_Venta'; ?>' 'frmDV')"> Editar </button></td>
        <td><button onclick="eliminar('<?php echo $dato['id']; ?>','<?php echo 'Detalles_Venta'; ?>')">Eliminar</button></td>
    </tr>
    <?php } ?>
</table>


