
<?php
    include_once "../db/db.php";

    $Proveedores = new db();
    $Proveedores->conectar();

    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $contacto=$_REQUEST['contacto'];
    $direccion=$_REQUEST['direccion'];

    if ($id !=""){
        $sql = "UPDATE proveedores
                SET nombre = '$nombre',
                    contacto = '$contacto',
                    direccion = '$direccion'
                WHERE id = $id";
        $Proveedores->actualizar($sql);
    }
    else {
        $sql = "INSERT INTO proveedores (nombre, contacto, direccion)
                VALUES ('$nombre', '$contacto', '$direccion')";
        $Proveedores->insertar($sql);

    }

    // Para Actualizar la tabla
    $sql = "SELECT id, nombre, contacto, direccion
            FROM proveedores";
    $datos = $Proveedores->obtenerRegistros($sql);
    include_once "../proveedores/tabla.php";
    
    $Proveedores->desconectar();

?>