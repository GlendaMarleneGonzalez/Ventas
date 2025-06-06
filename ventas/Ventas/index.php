
<?php
    include_once "../db/db.php";

    $dbVentas2 = new db();
    $dbVentas2->conectar();

    $id = ( isset($_REQUEST['id']) ? $_REQUEST['id'] : '0');

    $sql = "SELECT * FROM ventas";
    $datos10 = $dbVentas2->obtenerRegistros($sql);

    $sql = "SELECT * FROM usuarios"; 
    $usuarios = $dbVentas2->obtenerRegistros($sql);
    
    $dbVentas2->desconectar();
?>

<section>
    <?php include_once "../ventas/frmVen.php"; ?>

    <div>
        <?php include_once "../detalles_venta/index.php"; ?>
    </div>
    
    <div id="contenedor3">
        <?php include_once "../ventas/tabla.php"; ?>
    </div>
</section>