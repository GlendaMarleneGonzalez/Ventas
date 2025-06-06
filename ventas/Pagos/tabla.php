
<table>
    <tr>
        <th>ID</th>
        <th>Venta ID</th>
        <th>Monto Pagado</th>
        <th>Metodo Pago</th>
        <th>Fecha Pago</th>
        <th>Saldo Restante</th>
        <th>Interés Generado</th>
        <th> Acciones </th>
    </tr>

    <?php foreach ($datos7 as $dato) { ?>
        <tr>
            <td><?php echo $dato['id']; ?></td>
            <td><?php echo $dato['venta_id']; ?></td>
            <td><?php echo $dato['monto_pagado']; ?></td>
            <td><?php echo $dato['metodo_pago']; ?></td>
            <td><?php echo $dato['fecha_pago']; ?></td>
            <td><?php echo $dato['saldo_restante']; ?></td>
            <td><?php echo $dato['interes_generado']; ?></td>
            
            <td> <button onclick="editarPagos(<?php echo $dato['id']; ?>,'pagos','frm')"> Editar </button> </td>
            <td> <button onclick="eliminarPagos(<?php echo $dato['id']; ?>,'<?php echo 'pagos'; ?>')"> Eliminar </button> </td>
        </tr>
    <?php } ?>
</table>
