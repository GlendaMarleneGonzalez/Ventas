
<div>
    <h2> Formulario para Pagos </h2>
</div>

<form action="" method="post" id="frm_pag" onsubmit="return false;">

    <label for="id">ID:</label>
    <input type="text" name="id" id="id" readonly>

    <label for="venta_id">Venta ID:</label>
    <input type="number" name="venta_id" id="venta_id" required>

    <label for="monto_pagado">Monto Pagado:</label>
    <input type="number" step="0.01" name="monto_pagado" id="monto_pagado" required>

    <label for="metodo_pago">Método de Pago:</label>
    <select name="metodo_pago" id="metodo_pago" required>
        <option value="">-- Seleccione --</option>
        <option value="efectivo">Efectivo</option>
        <option value="tarjeta">Tarjeta</option>
        <option value="transferencia">Transferencia</option>
    </select>

    <label for="fecha_pago">Fecha de Pago:</label>
    <input type="date" name="fecha_pago" id="fecha_pago" required>

    <label for="saldo_restante">Saldo Restante:</label>
    <input type="number" step="0.01" name="saldo_restante" id="saldo_restante" required>

    <label for="interes_generado">Interés Generado:</label>
    <input type="number" step="0.01" name="interes_generado" id="interes_generado" required>

    <button onclick="enviarPagos('../pagos/ins_act.php')"> Guardar </button>
</form>