
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Fecha de Creación</th>
        <th>Acciones</th>
    </tr>

    <?php
        foreach ($datos as $dato) { ?>
    
        <tr>
            <td> <?php echo $dato ['id']; ?> </td>
            <td> <?php echo $dato ['nombre']; ?> </td>
            <td> <?php echo $dato ['email']; ?> </td>
            <td> <?php echo $dato ['rol']; ?> </td>
            <td> <?php echo $dato ['fecha_creacion']; ?> </td>
            

            <td>
                <button onclick="editarUsuarios('<?php echo $dato ['id']; ?>', 
                                        '<?php echo $dato ['nombre']; ?>',
                                        '<?php echo $dato ['email']; ?>',
                                        '<?php echo $dato ['rol']; ?>',
                                        '<?php echo $dato ['fecha_creacion']; ?>','usuarios', 'frm_usu')"> Editar </button>
            </td>
            
            <td>
                <button onclick="eliminarUsuarios(<?php echo $dato ['id']; ?> 'usuarios')"> Eliminar </button>
            </td>
        </tr>
    <?php } ?>

</table>