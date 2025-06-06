
<?php
    include_once "../db/db.php";

    $Usuarios = new db();
    $Usuarios->conectar();

    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $email=$_REQUEST['email'];
    $contraseña=$_REQUEST['contraseña'];
    $rol=$_REQUEST['rol'];
    $fecha_creacion=$_REQUEST['fecha_creacion'];

    if ($id !=""){
        $sql = "UPDATE usuarios
                SET nombre = '$nombre',
                    email = '$email',
                    contraseña = '".password_hash($contraseña, PASSWORD_DEFAULT)."',
                    rol = '$rol',
                    fecha_creacion = '$fecha_creacion'
                WHERE id = $id";
        $Usuarios->actualizar($sql);
    }
    else {
        $sql = "INSERT INTO usuarios (nombre, email, contraseña, rol, fecha_creacion)
                VALUES ('$nombre', '$email', '".password_hash($contraseña, PASSWORD_DEFAULT)."', '$rol', '$fecha_creacion')";
        $Usuarios->insertar($sql);

    }

    $sql = "SELECT id, nombre, email, rol, fecha_creacion
            FROM Usuarios";
    $datos = $Usuarios->obtenerRegistros($sql);
    include_once "../usuarios/tabla.php";
    
    $Usuarios->desconectar();

?>
            