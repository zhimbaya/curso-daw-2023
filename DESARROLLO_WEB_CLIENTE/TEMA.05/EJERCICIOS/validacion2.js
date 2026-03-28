window.onload = iniciar;
function iniciar(){
    document.getElementById("enviar").addEventListener("click",validar,false);

}
function validaNombre(){
    var elemento = document.getElementById("nombre");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        error(elemento);
        return false;
    }
    return true;
}
function validaEdad(){
    var elemento = document.getElementById("edad");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        error(elemento);
        return false;
    }
    return true;
}
function validaTelefono(){
    var elemento = document.getElementById("telefono");
    limpiarError(elemento);
    if(!elemento.checkValidity()){
        error(elemento);
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

function error(elem){
    document.getElementById("mensajeError").innerHTML = elem.validationMessage;
    elem.className = "error";
    elem.focus();
}
function limpiarError(elem){
    var formulario = document.forms[0];
    for(var i = 0; i < formulario.elements.length; i++){
        formulario.elements[i].className="";
    }
    
}

