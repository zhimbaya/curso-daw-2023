var colorActivo="";
var sePuedePintar=false;
window.addEventListener("load", iniciar);


function crearTablaDibujo() {

var tablaDibujo;
var titulo;
var fila;

tablaDibujo=document.createElement("table");

tablaDibujo.border="1";
tablaDibujo.className="tablerodibujo";
tablaDibujo.id="tablero";

titulo=document.createElement("caption");
textoTitulo=document.createTextNode("Haga click en cualquier tecla para activar/desactivar el Pincel.");
titulo.appendChild(textoTitulo);

tablaDibujo.appendChild(titulo);

for (var i=0;i<30;i++) {
  fila=document.createElement("tr");
  for (var j=0;j<30;j++) {
       celda=document.createElement("td");
       fila.appendChild(celda);
  }     
  tablaDibujo.appendChild(fila);
}

zonadibujo.appendChild(tablaDibujo);

}

function activarColor () {
var colores;
var numColores;
var nombreClaseAnterior;
var nombreClase;

       colores=this.parentNode.getElementsByTagName("td");
       numColores=colores.length;
       for (var i=0;i<numColores;i++) {
             nombreClaseAnterior=colores[i].className;
	     nombreClase=nombreClaseAnterior.replace(/\bseleccionado\b/,"");
             colores[i].setAttribute("class",nombreClase);
       }
       colorActivo=this.className;
       this.className+=" seleccionado";
}

function activarPintar () {
       if (sePuedePintar) {  
		sePuedePintar=false;   
		pincel.innerHTML="PINCEL DESACTIVADO";
       }
       else { 
		sePuedePintar=true; 
		pincel.innerHTML="PINCEL ACTIVADO";
		this.className=colorActivo;
       }
 
}

function pintar () {
    if (sePuedePintar){
       this.className=colorActivo;
    }
}

function iniciar () {
var colores;
var celdasTablero;

   crearTablaDibujo();
   colores=paleta.getElementsByTagName("tr")[0].getElementsByTagName("td");
   numColores=colores.length;
   for (var i=0;i<numColores;i++) {
          colores[i].addEventListener("click",activarColor);
   }

   celdasTablero=tablero.getElementsByTagName("td");
   for (var i=0;i<900;i++) {
      celdasTablero[i].addEventListener("mouseover",pintar);
      celdasTablero[i].addEventListener("click",activarPintar);
   }
}
