
<?php
    include_once "../db/db.php";

    $Pagos = new db();
    $Pagos->conectar();

    $sql = "SELECT id, venta_id, monto_pagado, metodo_pago, fecha_pago, saldo_restante, interes_generado
            FROM pagos";

    $datos7 = $Pagos->obtenerRegistros($sql);
?>

<?php include_once "../pagos/frmPag.php"; ?>

<hr>

    <div id="contenedor_pagos">
        <?php include_once "../pagos/tabla.php"; ?>
    </div>
