
<?php
  include_once "../db/db.php";
  $dbVentas2 = new db();
  $dbVentas2->conectar();

  $id = $_REQUEST['id']; 
  $tb = $_REQUEST['tb'];  

  $sql = "DELETE FROM $tb WHERE id = $id";
  $dbVentas2->eliminar($sql);

  $sql = "SELECT * FROM $tb"; 
  $datos5 = $dbVentas2->obtenerRegistros($sql);
  include_once "../$tb/tabla.php";
  
  $dbVentas2->desconectar();
?>