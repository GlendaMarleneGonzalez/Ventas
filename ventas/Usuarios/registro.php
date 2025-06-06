<?php
include_once "../db/db.php";
$Usuarios = new db();
$Usuarios->conectar();
// $id = $_REQUEST['id'];
$sql = $_REQUEST['sql']; 
$datos = $Usuarios->obtenerRegistros($sql);
$Usuarios->desconectar();
echo json_encode($datos[0]);
?>
