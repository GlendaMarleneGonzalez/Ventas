<?php
    include_once "../db/db.php";

    $Categorias = new db();
    $Categorias->conectar();

    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $descripcion_corta=$_REQUEST['descripcion_corta'];

    if ($id !=""){
        $sql = "UPDATE categorias
                SET nombre = '$nombre', descripcion_corta = '$descripcion_corta'
                WHERE id = $id";
        $Categorias->actualizar($sql);
    }
    else {
        $sql = "INSERT INTO categorias (nombre, descripcion_corta)
                VALUES ('$nombre', '$descripcion_corta')";
        $Categorias->insertar($sql);
    }

    // Para Actualizar la tabla
    $sql = "SELECT id, nombre, descripcion_corta
            FROM categorias";
    $datos = $Categorias->obtenerRegistros($sql);
    include_once "../categorias/tabla.php";
    $Categorias->desconectar();
?>