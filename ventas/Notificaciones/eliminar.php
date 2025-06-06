
<?php
    include_once "../db/db.php";

    $Notificaciones = new db();
    $Notificaciones->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM notificaciones
            WHERE id = $id";
    $Notificaciones->eliminar($sql);

    $sql = "SELECT id, usuario_id, venta_id, tipo, mensaje, fecha_envio, estado
            FROM notificaciones";
    $datos6 = $Notificaciones->obtenerRegistros($sql);
    include_once "../notificaciones/tabla.php";

    $Notificaciones->desconectar($sql);
?>