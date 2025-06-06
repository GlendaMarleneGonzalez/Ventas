
<?php
    include_once "../db/db.php";

    $Categorias = new db();
    $Categorias->conectar();

    $sql = "SELECT id, nombre, descripcion_corta
            FROM categorias";
    $datos = $Categorias->obtenerRegistros($sql);
?>

<?php include_once "../categorias/frmCat.php"; ?>

<hr>

    <div id="contenedor3">
        <?php include_once "../categorias/tabla.php"; ?>
    </div>