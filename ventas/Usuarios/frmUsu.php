<div>
    <h2>Formulario Para Usuarios</h2>
</div>

<form action="" method="post" id="frm_usu" onsubmit="return false;">

    <label for="id">ID:</label>
    <input type="text" name="id" id="id" readonly>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" maxlength="100" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" maxlength="100" required>

    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" id="contraseña" maxlength="255" required>

    <label for="rol">Rol:</label>
    <select name="rol" id="rol" required>
        <option value="admin">Administrador</option>
        <option value="vendedor">Vendedor</option>
        <option value="cliente">Cliente</option>
    </select>

    <label for="fecha_creacion">Fecha de Creación:</label>
    <input type="date" name="fecha_creacion" id="fecha_creacion" required>

    <button onclick="enviarUsuarios('../Usuarios/ins_act.php')"> Guardar </button>
</form>
