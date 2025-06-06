<?php
    include_once "../db/db.php";

    $Proveedores = new db();
    $Proveedores->conectar();

    $sql = "SELECT id, nombre, contacto, direccion
            FROM proveedores";
    $datos = $Proveedores->obtenerRegistros($sql);
?>

<?php include_once "../proveedores/frmPro.php"; ?>

<hr>

<div id="contenedor3">
    <?php include_once "../proveedores/tabla.php"; ?>
</div>
