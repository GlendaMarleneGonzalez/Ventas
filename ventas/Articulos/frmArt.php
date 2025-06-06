
<div>
    <h2> Formulario Para Articulos </h2>
</div>

<form action="" method="post" id="frm_art" onsubmit="return false;">

    <label for="id"> ID: </label>
    <input type="text" name="id" id="id" readonly>

    <label for="nombre"> Nombre: </label>
    <input type="text" name="nombre" id="nombre">

    <label for="descripcion"> Descripcion: </label>
    <input type="text" name="descripcion" id="descripcion">

    <label for="precio"> Precio: </label>
    <input type="number" name="precio" id="precio">

    <label for="stock"> Stock: </label>
    <input type="number" name="stock" id="stock">

    <label for="categoria_id"> Categorias: </label>
    <select name="categoria_id" id="categoria_id">
        <option value="1"> Bats Beisbol</option>
        <option value="2"> Bates Softboll</option>
        <option value="3"> Guantes </option>
        <option value="4"> Pantaloneras </option>
        <option value="5"> Guanteletas </option>
        <option value="6"> Arreos </option>

        
    </select>

    <button onclick="enviarArticulos('../articulos/ins_act.php')"> Guardar </button>
</form>
