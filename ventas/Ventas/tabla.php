<table>
    <tr>
        <th> ID </th>
        <th>Usuario ID</th>
        <th>Total</th>
        <th>Tipo de Pago</th>
        <th>Estado</th>
        <th>Saldo Pendiente</th>
        <th>Fecha</th>
        <th>Fecha Límite Pago</th>
        <th>Tasa Interés</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($datos10 as $dato) { ?>
        <tr>
            <td><?php echo $dato['id']; ?></td>
            <td><?php echo $dato['usuario_id']; ?></td>
            <td><?php echo $dato['total']; ?></td>
            <td><?php echo $dato['tipo_pago']; ?></td>
            <td><?php echo $dato['estado']; ?></td>
            <td><?php echo $dato['saldo_pendiente']; ?></td>
            <td><?php echo $dato['fecha']; ?></td>
            <td><?php echo $dato['fecha_limite_pago']; ?></td>
            <td><?php echo $dato['tasa_interes']; ?></td>
            
            <td> <button onclick="editarVentas('<?php echo $dato['id']; ?>','ventas', 'frm')"> Editar </button> </td>
            <td> <button onclick="eliminar('<?php echo $dato['id']; ?>','<?php echo 'ventas'; ?>')"> Eliminar </button></td>
            
        </tr>
    <?php } ?>
</table>