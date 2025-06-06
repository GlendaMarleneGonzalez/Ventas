
<?php
    include_once "../db/db.php";

    $Pagos = new db();
    $Pagos->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM pagos
            WHERE id = $id";
    $Pagos->eliminar($sql);

    $sql = "SELECT id, venta_id, monto_pagado, metodo_pago, fecha_pago, saldo_restante, interes_generado
            FROM pagos";
    $datos7 = $Pagos->obtenerRegistros($sql);
    include_once "../pagos/tabla.php";

    $Pagos->desconectar($sql);
?>