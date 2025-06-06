<?php
    include_once "../db/db.php";
    $dbVentas2 = new db();
    $dbVentas2->conectar();

    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
    $id = isset($_REQUEST['venta_id']) ? $_REQUEST['venta_id'] : $id;

    $sql = "SELECT * FROM detalles_venta WHERE venta_id = $id"; 
    $datos_d = $dbVentas2->obtenerRegistros($sql);

    $sql = "SELECT * FROM articulos"; 
    $articulos = $dbVentas2->obtenerRegistros($sql);
    $dbVentas2 ->desconectar();
?>

<section id="contenedor_Dventa">
    <?php include_once "../detalles_venta/frmDV.php"; ?>
    <hr>
</section>
