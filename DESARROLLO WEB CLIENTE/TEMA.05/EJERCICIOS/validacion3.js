window.onload = iniciar;
function iniciar(){
    document.getElementById("enviar").addEventListener("click",validar,false);

}
function validaNombre(){
    var elemento = document.getElementById("nombre");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        if(elemento.validity.valueMissing){
            error(elemento, "Debe introducir un nombre");
        }
        if(elemento.validity.patternMismatch){
            error(elemento,"El nombre debe tener entre 2 y 15 caracteres");
        }
        return false;
    }
    return true;
}
function validaEdad(){
    var elemento = document.getElementById("edad");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        if(elemento.validity.valueMissing){
            error(elemento, "Debe introducir una edad");
        }
        if(elemento.validity.rangeOverflow){
            error(elemento,"El valor debe ser menos de 100");
        }
        if(elemento.validity.rangeUnderflow){
            error(elemento,"El valor debe ser mayor o igual que 18");
        }
        return false;
    }
    return true;
}
function validaTelefono(){
    var elemento = document.getElementById("telefono");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        if(elemento.validity.valueMissing){
            error(elemento, "Debe introducir un teléfono");
        }
        if(elemento.validity.patternMismatch){
            error(elemento,"El teléfono debe tener 9 números");
        }
        return false;
    }
    return true;
}

function validar(e){
    limpiarError();
    if( validaNombre() && validaEdad() && validaTelefono() && confirm("Pulsa aceptar si deseas enviar e formulario.")){
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elem,mensaje){
    document.getElementById("mensajeError").innerHTML = mensaje;
    elem.className = "error";
    elem.focus();
}
function limpiarError(elem){
    var formulario = document.forms[0];
    for(var i = 0; i < formulario.elements.length; i++){
        formulario.elements[i].className="";
    }
    
}

