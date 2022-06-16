const nombre = document.getElementById("nombre");
const precio = document.getElementById("precio");
const marca = document.getElementById("marca");
const tipo = document.getElementById("tipo");

const form = document.getElementById("formUpload");

form.addEventListener("submit", e=>{
    let enter = true
    
    if (nombre.value == ""){
        alert("Ingrese el nombre del producto");
        enter = false;
    }

    if (precio.value == ""){
        alert("Ingrese un precio");
        enter = false;
    }

    if (isNaN(precio.value)){
        alert("El valor del precio debe ser un número");
        enter = false;
    }

    if (marca.value == ""){
        alert("Ingrese una marca para el producto");
        enter = false;
    }

    if (tipo.value != "tabla" && tipo.value != "rulemanes" && tipo.value != "ruedas" && tipo.value != "trucks" && tipo.value != "hardware" && tipo.value != "lija" && tipo.value != "skateCompleto"){
        alert("Ingrese un tipo permitido");
        enter = false;
    }
    
    if (enter == false){
        e.preventDefault();
    }

})