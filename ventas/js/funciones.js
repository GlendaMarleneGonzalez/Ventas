
function enviardatos(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado glenda porfin");

     });

        // const parser = new DOMParser();
        // const doc = parser.parseFromString(data, "text/html");
        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm").reset();
}

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function editar(id,tb,pfrm){
    datos = new FormData();
    sql = "select * from "+ tb + " where id = " + id;
    datos.append("sql",sql);
    fetch("/"+tb+"/registro.php", {
        body: datos,
        method: "post"})
    .then(response => response.json())
    .then(data => { 
        registro = data;

        //se agg esta nueva funcion -> agarro un formulario
        frm=document.getElementById(pfrm);

        datos = new FormData(frm);
        for (const key of datos.keys()) {
            campo = frm.querySelector("#"+key);
            campo.value = registro[key];
          }
    });
    
    // Se agrego esta nueva funcion (CRUD SIMPLE PARA VENTAS)
    if (pfrm == "frm"){
        contenedor = document.querySelector("#contenedor_detalle");
        fetch("/detalles_compra/index.php?id="+id)
        .then(response => response.text())
        .then(data => { contenedor.innerHTML = data});
    }
}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

function ver (url){
    div1 = document.querySelector("#contenedor1");

    fetch(url)
        .then(response => response.text())
        .then(data => (div1.innerHTML = data));
}

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function enviar() {
    div1 = document.querySelector("#contenedor1");
    
    frm1 = document.querySelector("#frm1");
    usuario = document.querySelector("#usuario");
    clave = document.querySelector("#clave");

    fetch("/Autenticacion/ValidarUsuario.php?usuario=$usuario$clave=$clave")
        .then(response => response.text())
        .then(data => (div1.innerHTML = data));
}
//  window.location.href = 'principal.html';

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

function eliminar(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function calcular_subtotal(){
    cantidad = document.getElementById('cantidad').value;
    //cambie cantidad ya que la tenia repetida x precio unitario
    precio_unitario = document.getElementById('precio_unitario').value;
    subtotal = document.getElementById('subtotal');
    subtotal.value = parseFloat(cantidad) * parseFloat(precio_unitario);
}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

function enviar_Dcompra() {
    let cont = document.querySelector("#contenedor_detalle");
    let datos = new FormData(document.getElementById("frm_detalle"));

    fetch("detalles_compra/ins_act.php", {
        method: "POST",
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        cont.innerHTML = data;
        document.getElementById("frm_detalle").reset();
    })
    .catch(error => console.error("Error al insertar/actualizar detalle:", error));
}



// ->Para Ventas & Detalles_Venta (TERMINADO)<-

function enviar_Dventa() {
    let cont = document.querySelector("#contenedor_Dventa");
    let datos = new FormData(document.getElementById("frm_DVenta"));

    fetch("detalles_venta/ins_act.php", {
        method: "POST",
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        cont.innerHTML = data;
        document.getElementById("frm_DVenta").reset();
    })
    .catch(error => console.error("Error al insertar/actualizar detalle:", error));
}

function editarVentas(id,tb,pfrm){
    datos = new FormData();
    sql = "select * from "+ tb + " where id = " + id;
    datos.append("sql",sql);
    fetch("/"+tb+"/registro.php", {
        body: datos,
        method: "post"})
    .then(response => response.json())
    .then(data => { 
        registro = data;

        //se agg esta nueva funcion -> agarro un formulario
        frm=document.getElementById(pfrm);

        datos = new FormData(frm);
        for (const key of datos.keys()) {
            campo = frm.querySelector("#"+key);
            campo.value = registro[key];
          }
    });
    
    // Se agrego esta nueva funcion (CRUD SIMPLE PARA VENTAS)
    if (pfrm == "frm"){
        contenedor = document.querySelector("#contenedor_Dventa");
        fetch("/detalles_venta/index.php?id="+id)
        .then(response => response.text())
        .then(data => { contenedor.innerHTML = data});
    }
}

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    function editarCategoria(id, nombre, descripcion_corta) {
        document.getElementById('id').value = id;
        document.getElementById('nombre').value = nombre;
        document.getElementById("descripcion_corta").value = descripcion_corta;
}



// ->Para ARTICULOS (TERMINADO)<-

function enviarArticulos(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm_art"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado glenda porfin");

     });

        // const parser = new DOMParser();
        // const doc = parser.parseFromString(data, "text/html");
        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_art").reset();
}
// <<
function editarArticulos(id, nombre, descripcion, precio, stock, categoria_id) {
    document.getElementById('id').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('precio').value = precio;
    document.getElementById('stock').value = stock;
    document.getElementById('categoria_id').value = categoria_id;
}

function eliminarArticulos(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}



// ->Para NOTIFICACIONES (T)<-

function enviarNotificacion(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm_pag"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado ya falta menos");

     });

        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_N").reset();
}
// <<
function editarNotificaciones(id, usuario_id, venta_id, tipo, mensaje, fecha_envio, estado) {
    document.getElementById('id').value = id;
    document.getElementById('usuario_id').value = usuario_id;
    document.getElementById('venta_id').value = venta_id;
    document.getElementById('tipo').value = tipo;
    document.getElementById('mensaje').value = mensaje;
    document.getElementById('fecha_envio').value = fecha_envio;
    document.getElementById('estado').value = estado;
}


function eliminarNotificaciones(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}



// ->Para PAGOS (T)<-

function enviarPagos(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor_pagos");
    let datos7 = new FormData(document.getElementById("frm_pag"))

    fetch(url_tabla, {
        body: datos7,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado ya faltan 2 nomas");

     });

        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_pag").reset();
}
// <<
function editarPagos(id, venta_id, monto_pagado, metodo_pago, fecha_pago, saldo_restante, interes_generado) {
    document.getElementById('id').value = id;
    document.getElementById('venta_id').value = venta_id;
    document.getElementById('monto_pagado').value = monto_pagado;
    document.getElementById('metodo_pago').value = metodo_pago;
    document.getElementById('fecha_pago').value = fecha_pago;
    document.getElementById('saldo_restante').value = saldo_restante;
    document.getElementById('interes_generado').value = interes_generado;

}


function eliminarPagos(id,tb) {           
    cont3 = document.querySelector("#contenedor_pagos");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}



// ->Para usuarios (TERMINADO)<-

function enviarUsuarios(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm_usu"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado & ya quedo tu proyecto chafa glenda JAJAJAJA");

     });

        // const parser = new DOMParser();
        // const doc = parser.parseFromString(data, "text/html");
        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_usu").reset();
}
// <<
function editarUsuarios(id, nombre, email, rol, fecha_creacion) {
    document.getElementById('id').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('email').value = email;
    document.getElementById('rol').value = rol;
    document.getElementById('fecha_creacion').value = fecha_creacion;
}

function eliminarUsuarios(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}




// ->Para Proveedores (TERMINADO)<-
function enviarProveedores(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm_pro"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado nomas 1 mas y terminas");

     });

        // const parser = new DOMParser();
        // const doc = parser.parseFromString(data, "text/html");
        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_pro").reset();
}
// <<
function editarProveedor(id, nombre, contacto,direccion) {
    document.getElementById('id').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('contacto').value = contacto;
    document.getElementById('direccion').value = direccion;
}

function eliminarProveedor(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}




// ->Para CATEGORIAS (TERMINADO)<-
function enviarProveedores(url_tabla) {      
    // cont3 = document.querySelector("#contenedor_detalle");
    cont3 = document.querySelector("#contenedor3");
    let datos = new FormData(document.getElementById("frm_pro"))

    fetch(url_tabla, {
        body: datos,
        method: "post"
    })
    .then(response => response.text())
    .then(data => { 
        cont3.innerHTML = data;
            alert("registro Agregado nomas 1 mas y terminas");

     });

        // const parser = new DOMParser();
        // const doc = parser.parseFromString(data, "text/html");
        const scripts = doc.querySelectorAll('script');
        scripts.forEach(script => {
            eval(script.textContent);
        });

     document.getElementById("frm_pro").reset();
}
// <<
function editarProveedor(id, nombre, contacto,direccion) {
    document.getElementById('id').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('contacto').value = contacto;
    document.getElementById('direccion').value = direccion;
}

function eliminarProveedor(id,tb) {           
    cont3 = document.querySelector("#contenedor3");
    fetch("/"+tb+"/eliminar.php?id="+id+"&tb="+tb)
        .then(response => response.text())
        .then(data => { cont3.innerHTML = data });
}
