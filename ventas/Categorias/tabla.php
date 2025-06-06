
<table>
    <tr>
        <th> ID </th>
        <th> Nombre  </th>
        <th> Descripcion corta  </th>
    </tr>

    
    <?php foreach ($datos as $dato) { ?>
    <tr>
            <td> <?php echo $dato ['id']; ?> </td>
            <td> <?php echo $dato ['nombre']; ?> </td>
            <td> <?php echo $dato ['descripcion_corta']; ?> </td>

            <td><button onclick="editarCategoria('<?php echo $dato ['id'] ?>',
                                                 '<?php echo $dato ['nombre']?>',
                                                 '<?php echo $dato ['descripcion_corta']?>','categorias', 'frm')"> Editar </button> </td>
                        
            <td> <button onclick="eliminar('<?php echo $dato['id']; ?>','<?php echo 'categorias'; ?>')">Eliminar</button> </td>
            
        </tr>
    <?php } ?>

</table>