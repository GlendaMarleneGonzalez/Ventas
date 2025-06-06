
<div>
    <h2> Formulario Para Categorias </h2>
</div>

<form action="" method="post" id="frm" onsubmit="return false;">

    <label for="id"> ID: </label>
    <input type="text" name="id" id="id" value="" readonly>

    <label for="nombre"> Nombre: </label>
    <input type="text" name="nombre" id="nombre">

    <label for="descripcion_corta"> Descripcion: </label>
    <input type="text" name="descripcion_corta" id="descripcion_corta">

    <!-- Para el cambio de cada tabla seria lo siguiente -->
    <button onclick="enviardatos('../categorias/ins_act.php')"> Guardar </button>

</form>