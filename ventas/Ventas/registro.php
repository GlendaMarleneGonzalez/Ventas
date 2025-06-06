
<?php
include_once "../db/db.php";
$dbVentas2 = new db();
$dbVentas2->conectar();
// $id = $_REQUEST['id'];
$sql = $_REQUEST['sql']; 
$datos10 = $dbVentas2->obtenerRegistros($sql);
$dbVentas->desconectar();
echo json_encode($datos[0]);
?>

