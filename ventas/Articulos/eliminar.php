
<?php
    include_once "../db/db.php";
    $Articulos = new db();
    $Articulos->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM articulos
            WHERE id = $id";
    $Articulos->eliminar($sql);

    $sql = "SELECT id, nombre, descripcion, precio, stock, categoria_id
            FROM articulos";
    $datos1 = $Articulos->obtenerRegistros($sql);    
    include_once "../articulos/tabla.php";

    $Articulos->desconectar($sql);
?>