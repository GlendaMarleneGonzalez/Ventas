
<table>
    <tr>
        <th> ID </th>
        <th> Nombre  </th>
        <th> Descripcion </th>
        <th> Precio </th>
        <th> Stock </th>
        <th> Categorias </th>
    </tr>

    <?php
        foreach ($datos1 as $dato) { ?>
    
        <tr>
            <td> <?php echo $dato ['id']; ?> </td>
            <td> <?php echo $dato ['nombre']; ?> </td>
            <td> <?php echo $dato ['descripcion']; ?> </td>
            <td> <?php echo $dato ['precio']; ?> </td>
            <td> <?php echo $dato ['stock']; ?> </td>
            <td> <?php echo $dato ['categoria_id']; ?> </td>

            <td> <button onclick="editarArticulos('<?php echo $dato['id']; ?>',
                                                  '<?php echo $dato['nombre']; ?>',
                                                  '<?php echo $dato['descripcion']; ?>',
                                                  '<?php echo $dato['precio']; ?>',
                                                  '<?php echo $dato['stock']; ?>',
                                                  '<?php echo $dato['categoria_id']; ?>', 'articulos', 'frm_art' )"> Editar </button> </td>

            <td> <button onclick="eliminarArticulos('<?php echo $dato['id']; ?>','<?php echo 'articulos'; ?>')"> Eliminar </button> </td>

        </tr>
    <?php } ?>

</table>