<?php
    include_once "../db/db.php";

    $Usuarios = new db();
    $Usuarios->conectar();

    $sql = "SELECT id, nombre, email, rol, fecha_creacion
            FROM usuarios";
    $datos = $Usuarios->obtenerRegistros($sql);
?>

<?php include_once "../Usuarios/frmUsu.php"; ?>

<hr>

<div id="contenedor3">
    <?php include_once "../Usuarios/tabla.php"; ?>
</div>
