
<?php
include_once "../db/db.php";
$dbventas = new db();
$dbventas->conectar();

//se agrego esta nueva linea se agg en ruta
$id = ( isset($_REQUEST['id']) ? $_REQUEST['id'] : '0');
$id = ( isset($_REQUEST['compra_id']) ? $_REQUEST['compra_id'] : $id);

$sql = "SELECT * FROM detalles_compra WHERE compra_id = $id"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
$dbventas ->desconectar();
?>
<section id="contenedor_detalle">
    <?php include_once "../detalles_compra/frm.php"; ?>
    <hr>

</section>
