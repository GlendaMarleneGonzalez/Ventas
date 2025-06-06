
<?php
    include_once "../db/db.php";

    $Categorias = new db();
    $Categorias->conectar();

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM categorias 
            WHERE id = $id";
    $Categorias->eliminar($sql);

        $sql = "SELECT id, nombre, descripcion_corta
                FROM Categorias";
        $datos = $Categorias->obtenerRegistros($sql);
        include_once "../categorias/tabla.php";

    $Categorias->desconectar($sql);
?>