
<?php
    include_once "../db/db.php";
    $Proveedores = new db();
    $Proveedores->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM proveedores
            WHERE id = $id";
    $Proveedores->eliminar($sql);

    $sql = "SELECT id, nombre, direccion, contacto
            FROM Proveedores";
    $datos = $Proveedores->obtenerRegistros($sql);
    include_once "../Proveedores/tabla.php";

    $Proveedores->desconectar($sql);
?>