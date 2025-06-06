
<form action="" method="post" id="frm_DVenta" onsubmit="return false;">

    <table>
        <tr>
            <td> <input type="hidden" name="id" id="id" value=""> </td>
            <td> <input type="hidden" name="venta_id" id="venta_id" value="<?php echo $id; ?>"> </td>
            <td> 
                <select name="articulo_id" id="articulo_id">
                    <option value="0"> Seleccionar Artículo </option>
                    <?php foreach ($articulos as $articulo) {
                        echo "<option value='" . $articulo["id"] . "'>"
                        . $articulo["nombre"] ."</option>";
                    } ?>
                </select>
            </td>
            <td> <input type="number" name="cantidad" id="cantidad" onchange="calcular_subtotal()"> </td>
            <td> <input type="number" name="precio_unitario" id="precio_unitario" onchange="calcular_subtotal()"> </td>
            <td> <input type="number" name="subtotal" id="subtotal" style="width:70px" readonly></td>
            <td> <button onclick="enviar_Dventa('/detalles_venta/ins_act.php','contenedor_detalle','frm_DVenta')"> Grabar </button></td>
        </tr>

        <tr>
            <th> <label for=""> id:</label> </th>
            <th> <label for=""> Venta_ID: </label> </th>
            <th> <label for="articulo_id"> Artículo: </label></th>
            <th><label for="cantidad">Cantidad:</label></th>
            <th><label for="precio_unitario"> Precio Unitario: </label></th>
            <th><label for="subtotal">Sub.Tot:</label></th>
            <th></th>
        </tr>
        <?php foreach ($datos_d as $dato) { ?>
        <tr>
            <td> <?php echo $dato['id']; ?> </td>
            <td> <?php echo $dato['venta_id']; ?></td>
            <td> <?php echo $dato['articulo_id']; ?></td>
            <td> <?php echo $dato['cantidad']; ?></td>
            <td> <?php echo $dato['precio_unitario']; ?></td>
            <td> <?php echo $dato['subtotal']; ?></td>
            <td><button onclick="editar('<?php echo $dato['id']; ?>', 'Detalles_Venta', 'frm_DVenta')">Editar</button></td>
            <td><button onclick="eliminar('<?php echo $dato['id']; ?>', 'Detalles_Venta')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>
</form>



<!-- Nose hara con html:5 ya que es un formulario -->
<!-- 
<div> <h2> Formulario Para Detalles de Venta </h2> </div>

<form action="/index.html" method="get">

    <label for="id">ID: </label>
    <input type="number" name="id" id="id">

    <label for="venta"> Venta: </label>
    <input type="number" name="venta" id="venta">

    <label for="articulo"> Artículo: </label>
    <input type="number" name="articulo" id="articulo">

    <label for="cantidad"> Cantidad: </label>
    <input type="number" name="cantidad" id="cantidad">

    <label for="precio_unitario"> Precio Unitario: </label>
    <input type="number" name="precio_unitario" id="precio_unitario">

    <label for="subtotal"> Subtotal: </label>
    <input type="number" name="subtotal" id="subtotal">

    <input type="submit" value="Enviar">
    
</form> -->