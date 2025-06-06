<?php
  include_once "../db/db.php";
  $dbVentas2 = new db();
  $dbVentas2->conectar();
    
  $id = $_REQUEST['id'];
  $venta_id = $_REQUEST['venta_id'];
  $articulo_id = $_REQUEST['articulo_id'];
  $cantidad = $_REQUEST['cantidad'];
  $precio_unitario = $_REQUEST['precio_unitario'];
  $subtotal = $_REQUEST['subtotal'];

  if ($id != "") {
    // Actualizar los detalles de la venta
    $sql = "UPDATE detalles_venta 
            SET cantidad = '$cantidad',
                precio_unitario = '$precio_unitario', 
                subtotal = '$cantidad' * '$precio_unitario' 
            WHERE id = $id";
    $dbVentas2->actualizar($sql);
  }
  else {
    // Insertar un nuevo detalle de venta
    $sql = "INSERT INTO detalles_Venta (
                          venta_id,
                          articulo_id, 
                          cantidad, 
                          precio_unitario, 
                          subtotal) 
          VALUES ('$venta_id',
                  '$articulo_id',
                  '$cantidad',
                  '$precio_unitario',
                  '$subtotal')";
    $dbVentas2->insertar($sql);
  }

  // Consultar los detalles de la venta actualizada
  $sql = "SELECT * FROM detalles_venta WHERE venta_id = $venta_id"; 
  $datos_d = $dbVentas2->obtenerRegistros($sql);
  include_once "../detalles_venta/index.php";

  $dbVentas2->desconectar();
?>
