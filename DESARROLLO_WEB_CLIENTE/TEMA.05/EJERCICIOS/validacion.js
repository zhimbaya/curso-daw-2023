//SELECCIÓN DEL FORMULARIO

//Conociendo el id
var formulario = document.getElementById("miFormulario");
var formulario2 = document.forms["miFormulario"];

//Conociendo el número de formulario que es en la página
var formulario3 = document.getElementsByTagName("form")[0];
var formulario4 = document.forms[0];

//Seleccionar elementos de un formulario
/*
.elements[] devuelve un array con todos los input del formulario
getElementById("idElemento") Devuelve un elemento con un id determinado
getElementsByTagName("etiqueta") Devuelve un array con elementos de un tipo de etiqueta (input, select, etc.)
getElementsByName("nombre") Devuelve un array con elementos que tienen el mismo nombre (por ejemplo: radiobutton).
*/
window.onload = iniciar;
function iniciar(){
    document.getElementById("enviar").addEventListener("click",validar,false);

}
function validaNombre(){
    var elemento = document.getElementById("nombre");
    limpiarError(elemento);
    if(elemento.value == ""){
        alert("El campo Nombre no puede ser vacío.");
        error(elemento);
        return false;
    }
    return true;
}
function validaTelefono(){
    var elemento = document.getElementById("telefono");
    if(isNaN(elemento.value)){
        alert("El campo teléfono tiene que ser numérico.");
        return false;
    }
    return true;
}
function validaFecha(){
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var anio = document.getElementById("anio").value;

    var fecha = new Date(anio, mes, dia);
    if(isNaN(fecha)){
        alert("Los campos de la fecha son incorrectos");
        return false;
    }
   return true;
}
function validaCheck(){
    var campoCheck = document.getElementById("mayor");
    if(!campoCheck.checked){
        alert("Debes ser mayor de edad");
        return false;
    }
    return true;
}
function validar(e){
    if( validaNombre() && validaTelefono() && validaFecha() && validaCheck() && confirm("Pulsa aceptar si deseas enviar e formulario.")){
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elem){
    elem.className="error";
    elem.focus();
}
function limpiarError(elem){
    elem.className = "";
}

