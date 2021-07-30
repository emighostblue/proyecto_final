console.log("Saludos desde Java Script");

function agregar(){
    document.getElementById("formulario_agregar").classList.add("formulario_active");
    document.getElementById("formulario_agregar").classList.remove("formulario");

    document.getElementById("formulario_actualizar").classList.remove("formulario_active");
    document.getElementById("formulario_eliminar").classList.remove("formulario_active");

    document.getElementById("formulario_actualizar").classList.add("formulario");
    document.getElementById("formulario_eliminar").classList.add("formulario");
}

function actualizar(){
    document.getElementById("formulario_actualizar").classList.add("formulario_active");
    document.getElementById("formulario_actualizar").classList.remove("formulario");

    document.getElementById("formulario_agregar").classList.remove("formulario_active");
    document.getElementById("formulario_eliminar").classList.remove("formulario_active");

    document.getElementById("formulario_agregar").classList.add("formulario");
    document.getElementById("formulario_eliminar").classList.add("formulario");
}

function eliminar(){
    document.getElementById("formulario_eliminar").classList.add("formulario_active");
    document.getElementById("formulario_eliminar").classList.remove("formulario");

    document.getElementById("formulario_actualizar").classList.remove("formulario_active");
    document.getElementById("formulario_agregar").classList.remove("formulario_active");

    document.getElementById("formulario_actualizar").classList.add("formulario");
    document.getElementById("formulario_agregar").classList.add("formulario");
}

function salida(){
    location.href="../index.html";
}
function salida2(salida){
    setTimeout(salida, 5000);
    console.log("Saludos desde salida 2");
}