
<div>
    <h2>Formulario de Proveedores</h2>
</div>

<form action="" method="post" id="frm_pro" onsubmit="return false;">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id" readonly>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="contacto">Contacto:</label>
    <input type="text" name="contacto" id="contacto" required>

    <label for="direccion">Dirección:</label>
    <textarea name="direccion" id="direccion" required></textarea>

    <button onclick="enviarProveedores('../Proveedores/ins_act.php')"> Guardar </button>
</form>
