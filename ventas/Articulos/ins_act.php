
<?php
    include_once "../db/db.php";

    $Articulos = new db();
    $Articulos->conectar();

    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $stock = $_REQUEST['stock'];
    $categoria_id = $_REQUEST['categoria_id'];

    if ($id !=""){
        $sql = "UPDATE articulos
                SET nombre = '$nombre',
                    descripcion = '$descripcion',
                    precio = '$precio',
                    stock = '$stock',
                    categoria_id = '$categoria_id'
                WHERE id = $id";
        $Articulos->actualizar($sql);
    }
    else {
        $sql = "INSERT INTO articulos (nombre, descripcion, precio, stock, categoria_id)
                VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$categoria_id')";
        
        $Articulos->insertar($sql);
    }

    // Para Actualizar la tabla
    $sql = "SELECT id, nombre, descripcion, precio, stock, categoria_id
            FROM articulos";
    $datos1 = $Articulos->obtenerRegistros($sql);
    include_once "../articulos/tabla.php";
    
    $Articulos->desconectar();

?>