function iniciar() {
  // Cuando el documento esté cargado asignaremos los eventos siguientes.
  // Al hacer clic en el botón de enviar tendrá que llamar a la validación del miformulario.
  document.getElementById("enviar").addEventListener("click", validar, false);
  // Asignamos que cuando pierda el foco el Nombre y los apellidos ponga en mayúsculas las Iniciales.
  document.getElementById("nombre").addEventListener("blur", mayusculas, false);
  document.getElementById("apellidos").addEventListener("blur", mayusculas, false);
}
function contadorIntentos() {
  var cookies = document.cookie;
  var contador = 0;
  // Si no existe la cookie la creamos y grabamos el texto contador=0.
  if (cookies == "") {
    cookies = "contador=0";
  }
  contador = cookies.substring(9);
  contador++;
  document.cookie = "contador=" + contador;
  asignarCampo("intentos","Intento de Envíos del formulario: " + contador + ".");
  return true;
}
function asignarCampo(campo, valor) {
  document.getElementById(campo).innerHTML = valor;
}
function mayusculas() {
  this.value = this.value.toUpperCase();
}
function validar(eventopordefecto) {
  // En la variable que pongamos aquí gestionaremos el evento por defecto.
  if (
    contadorIntentos() &&
    validarCamposTextoYEdad("0,1,2") &&
    validarNIF() &&
    validarEmail() &&
    validarProvincia() &&
    validarFecha() &&
    validarTelefono() &&
    validarHora() &&
    confirmarEnvio()
  ) {
    return true;
  } else {
    // Cancelamos el evento de envío por defecto asignado al botón de enviar.
    eventopordefecto.preventDefault();
    return false;
  }
}

// A esta función se le pasa el índice de los campos de texto que queremos que valide solamente si contienen
// o no contienen valores.
function validarCamposTextoYEdad(campos) {
  var miformulario = document.getElementById("formulario");
  var camposchequear = campos.split(",");
  var elemento;
  for (var i = 0; i < camposchequear.length; i++) {
    elemento = miformulario.elements[camposchequear[i]];
    // Eliminamos la clase error si es que estaba asignada a algún campo anteriormente.
    elemento.className = "";
    if (elemento.type == "text" && elemento.value == "") {
      asignarCampo("errores","El campo: " + elemento.name + " no puede estar en blanco");
      elemento.focus();
      elemento.className = "error";
      return false;
    } else {
      // Chequeamos el campo edad
      if (elemento.id == "edad") {
        if (isNaN(elemento.value) || elemento.value < 0 || elemento.value > 105) {
          asignarCampo("errores","El campo: " + elemento.name.toUpperCase() + " posee valores incorrectos");
          elemento.focus();
          elemento.className = "error";
          return false;
        }
      }
    }
  }
  // Si sale de la función por aquí es que todos los campos de texto y la edad son válidos.
  return true;
}
function validarNIF() {
  // 8 números - Letra
  var patron = /^\d{8}-[A-Z]{1}$/;
  var elemento = document.getElementById("nif");
  if (patron.test(elemento.value)) {
    return true;
  } else {
    asignarCampo(
      "errores",
      "El campo: NIF está incorrecto.<br />Formato 8 digitos-Letra Mayúscula"
    );
    elemento.focus();
    elemento.className = "error";
    return false;
  }
}
function validarEmail() {
  /*
// Explicación de la Expresión Regular para validar el e-mail:
/^[a-zA-Z0-9._-]+ Indica que el e-mail debe comenzar con caracteres alfanuméricos, en
mayúsculas o minúsculas, subrayados, puntos, etc.
@ Debe haber un símbolo de @ después de los caracteres iniciales.
[a-zA-Z0-9.-]+: Después de la arroba puede haber caracteres alfanuméricos. También puede
contener . y guiones -
\. Debe haber un punto después del segundo grupo de caracteres para separar los dominios y subdominios.
[a-zA-Z]{2,4}$/ Para terminar la dirección de e-mail debe terminar de 2 a 3 caracteres alfabéticos.
{2,4} indica el mínimo y máximo número de caracteres. Esto permitirá dominio con 2,3 y 4 caracteres.
*/
  var patron = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var elemento = document.getElementById("email");
  // Eliminamos la clase error asignada al elemento hora.
  elemento.className = "";
  if (patron.test(elemento.value)) {
    return true;
  } else {
    asignarCampo("errores", "El campo: E-MAIL está incorrecto.");
    elemento.focus();
    elemento.className = "error";
    return false;
  }
}
function validarProvincia() {
  var elemento = document.getElementById("provincia");
  // Eliminamos la clase error asignada al elemento hora.
  elemento.className = "";
  // Comprueba que la opción seleccionada sea diferente a 0.
  // Si es la 0 es que no ha seleccionado ningún nombre de Provincia.
  if (elemento.selectedIndex == 0) {
    asignarCampo("errores", "¡Atención!: Debes seleccionar una PROVINCIA.");
    elemento.focus();
    elemento.className = "error";
    return false;
  } else {
    return true;
  }
}
function validarFecha() {
  var elemento = document.getElementById("fecha");
  var valor = elemento.value;
  // Eliminamos la clase error asignada al elemento fecha.
  document.getElementById("fecha").className = "";
  // dd-mm-aaaa o bien dd/mm/aaaa
  var patron1 = /^\d{2}-\d{2}-\d{4}$/;
  var patron2 = /^\d{2}\/\d{2}\/\d{4}$/;
  if (patron1.test(valor) || patron2.test(valor)) {
    return true;
  } else {
    asignarCampo(
      "errores",
      "El campo: FECHA está incorrecto.<br />Formato dd/mm/aaaa o dd-mm-aaaa"
    );
    elemento.focus();
    elemento.className = "error";
    return false;
  }
}
function validarTelefono() {
  var elemento = document.getElementById("telefono");
  // Eliminamos la clase error asignada al elemento teléfono.
  elemento.className = "";
  // dd-mm-aaaa o bien dd/mm/aaaa
  var patron = /^\d{9}$/;
  if (patron.test(elemento.value)) {
    return true;
  } else {
    asignarCampo(
      "errores",
      "El campo: TELEFONO está incorrecto.<br/>Sólo números y máximo de 9 dígitos"
    );
    elemento.focus();
    elemento.className = "error";
    return false;
  }
}
function validarHora() {
  var elemento = document.getElementById("hora");
  // Eliminamos la clase error asignada al elemento hora.
  document.getElementById("hora").className = "";
  // 4 números separados por :
  var patron = /^\d{2}:\d{2}$/;
  if (patron.test(elemento.value)) {
    return true;
  } else {
    asignarCampo(
      "errores",
      "El campo: HORA está incorrecto.<br/>Formato: HH:MM"
    );
    elemento.focus();
    elemento.className = "error";
    return false;
  }
}

function confirmarEnvio() {
  asignarCampo("errores", "");
  return confirm("¿Deseas enviar el formulario?");
}
window.onload = iniciar;