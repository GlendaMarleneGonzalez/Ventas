
<?php
    include_once "../db/db.php";

    $Notificaciones = new db();
    $Notificaciones->conectar();

    $sql = "SELECT id, usuario_id, venta_id, tipo, mensaje, fecha_envio, estado
            FROM notificaciones";
    $datos6 = $Notificaciones->obtenerRegistros($sql);
?>

<?php include_once "../notificaciones/frmNot.php"; ?>

<hr>

    <div id="contenedor3">
        <?php include_once "../notificaciones/tabla.php"; ?>
    </div>