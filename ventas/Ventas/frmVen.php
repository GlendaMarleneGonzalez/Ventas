
<div>
    <h2>Formulario Para Ventas</h2>
</div>

<form action="" method="post" id="frm_ventas" onsubmit="return false;">
    
    <label for="id">ID:</label>
    <input type="text" name="id" id="id" readonly>

    <label for="usuario_id">ID Usuario:</label>
    <input type="number" name="usuario_id" id="usuario_id" required>

    <label for="total">Total:</label>
    <input type="number" step="0.01" name="total" id="total" required>

    <label for="tipo_pago">Tipo de Pago:</label>
    <select name="tipo_pago" id="tipo_pago" required>
        <option value=""> -> Seleccionar tipo de pago <- </option>
        <option value="contado"> Contado </option>
        <option value="credito"> Crédito </option>
    </select>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" required>
        <option value=""> -> Seleccione <- </option>
        <option value="pendiente"> Pendiente </option>
        <option value="pagado"> Pagado </option>
        <option value="cancelado"> Cancelado </option>
    </select>

    <label for="saldo_pendiente">Saldo Pendiente:</label>
    <input type="number" step="0.01" name="saldo_pendiente" id="saldo_pendiente" required>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required>

    <label for="fecha_limite_pago">Fecha Límite de Pago:</label>
    <input type="date" name="fecha_limite_pago" id="fecha_limite_pago" required>

    <label for="tasa_interes">Tasa de Interés:</label>
    <input type="number" step="0.01" name="tasa_interes" id="tasa_interes" required>

    <button onclick="enviar_Dventa('../ventas/ins_act.php')"> Guardar </button>
</form>
