
<?php
    include_once "../db/db.php";

    $Notificaciones = new db();
    $Notificaciones->conectar();

    $id=$_REQUEST['id'];
    $usuario_id=$_REQUEST['usuario_id'];
    $venta_id = $_REQUEST['venta_id'];
    $tipo = $_REQUEST['tipo'];
    $mensaje = $_REQUEST['mensaje'];
    $fecha_envio = $_REQUEST['fecha_envio'];
    $estado = $_REQUEST['estado'];

    if ($id !=""){
        $sql = "UPDATE notificaciones
                SET usuario_id = '$usuario_id',
                    venta_id = '$venta_id',
                    tipo = '$tipo',
                    mensaje = '$mensaje',
                    fecha_envio = '$fecha_envio'
                    estado = '$estado'
                WHERE id = $id";
        $Notificaciones->actualizar($sql);
    }
    else {
        $sql = "INSERT INTO notificaciones (id, usuario_id, venta_id, tipo, mensaje, fecha_envio, estado) 
                VALUES ('$usuario_id', '$venta_id', '$tipo', '$mensaje', '$fecha_envio', '$estado')";
                $Notificaciones->insertar($sql);
            }
            
            $sql = "SELECT usuario_id, venta_id, tipo, mensaje, fecha_envio, estado
                    FROM notificaciones";
            $datos6 = $Notificaciones->obtenerRegistros($sql);
            include_once "../notificaciones/tabla.php";
            
            $Notificaciones->desconectar();
?>