<?php
  include_once "../db/db.php";
  $dbventas = new db();
  $dbventas->conectar();
    
  $id=$_REQUEST['id'];
  $compra_id=$_REQUEST['compra_id'];
  $articulo_id=$_REQUEST['articulo_id'];
  $cantidad=$_REQUEST['cantidad'];
  $precio_unitario=$_REQUEST['precio_unitario'];
  $subtotal=$_REQUEST['subtotal'];

  if ($id != "") {
    $sql = "UPDATE detalles_compra 
            SET cantidad = '$cantidad',
                precio_unitario = '$precio_unitario', 
                subtotal = '$subtotal'  
            WHERE id = $id";
    $dbventas->actualizar($sql);
  }
  else {
  $sql = "INSERT INTO detalles_compra (
                      compra_id,
                          articulo_id, 
                          cantidad, 
                          precio_unitario, 
                          subtotal) 
          VALUES ('$compra_id',
                  '$articulo_id',
                  '$cantidad',
                  '$precio_unitario',
                  '$subtotal')";
  $dbventas->insertar($sql);
  }

  $sql = "SELECT * FROM detalles_compra WHERE compra_id = $compra_id"; 
  $datos_d = $dbventas->obtenerRegistros($sql);
  include_once "../detalles_compra/index.php";

  $dbventas->desconectar();
?>