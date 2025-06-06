
<div>
    <h2> Formulario Para Notificaciones </h2>
</div>

<form action="" method="post" id="frm_Not" onsubmit="return false;">

    <label for="id"> ID: </label>
    <input type="text" name="id" id="id" readonly>

    <label for="usuario_id"> Usuario: </label>
    <input type="number" name="usuario_id" id="usuario_id" required>

    <label for="venta_id"> Venta: </label>
    <input type="number" name="venta_id" id="venta_id" required>

    <label for="tipo">Tipo:</label>
    <select name="tipo" id="tipo" required>
        <option value=""> -> Seleccionar tipo <- </option>
        <option value="recordatorio">Recordatorio</option>
        <option value="vencimiento">Vencimiento</option>
        <option value="mora">Mora</option>
    </select>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" rows="4" cols="30" required></textarea>

    <label for="fecha_envio">Fecha de Envío:</label>
    <input type="date" name="fecha_envio" id="fecha_envio" required>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" required>
        <option value=""> -> Seleccionar estado<- </option>
        <option value="pendiente">Pendiente</option>
        <option value="enviado">Enviado</option>
        <option value="visto">Visto</option>
    </select>

    <button type="button" onclick="enviarNotificacion('../notificaciones/ins_act.php')">Guardar</button>

</form>


