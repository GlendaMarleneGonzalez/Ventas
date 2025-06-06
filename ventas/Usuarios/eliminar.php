
<?php
    include_once "../db/db.php";

    $Usuarios = new db();
    $Usuarios->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM Usuarios
            WHERE id = $id";
    $Usuarios->eliminar($sql);


    $sql = "SELECT id, nombre, email, rol, fecha_creacion
            FROM usuarios";
    $datos = $Usuarios->obtenerRegistros($sql);
        include_once "../usuarios/tabla.php";

    $Usuarios->desconectar($sql);

?>
