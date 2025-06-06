
<?php
    include_once "../db/db.php";

    $Articulos = new db();
    $Articulos->conectar();
    
    $sql = "SELECT id, nombre, descripcion, precio, stock, categoria_id
            FROM Articulos";

    $datos1 = $Articulos->obtenerRegistros($sql);
?>

<?php include_once "../articulos/frmArt.php";?>

<hr>
    <div id="contenedor3">
        <?php include_once "../articulos/tabla.php"; ?>
    </div>