window.addEventListener("load",iniciar);

/* Estas variables van a ser objetos con esta estructura:
   {
        lat: valor,
        lng: valor    
   };
*/

var coordIp1;
var coordIp2;
var coordMi;

var ipPintando;

function iniciar(){
    botonMi.addEventListener("click",pintarMi);
    botonIp1.addEventListener("click",pintarIp1);
    botonIp2.addEventListener("click",pintarIp2);
    botonDist.addEventListener("click",calcularDist);
}

function pintarMi(){
     navigator.geolocation.getCurrentPosition(datosMi);
}

function datosMi(position){
   coordMi={
    lat: position.coords.latitude,
    lng: position.coords.longitude
   };
   marcarEnMapa(position.coords.latitude, position.coords.longitude);   
}


function peticionIPAjax(ip){
    var access_key = '43aae9d7454a6f5a9eaf7d0b180fc6d2';

    var url = 'http://api.ipstack.com/' + ip + '?access_key=' + access_key; 

    var xhr= new XMLHttpRequest();

    xhr.open("GET",url,true);
    xhr.addEventListener("readystatechange",datosIP);
    xhr.send();
}

function datosIP(){
    var datosJSON;

    if (this.readyState==4 && this.status=="200"){
        datosJSON=JSON.parse(this.responseText);
        console.log(datosJSON.latitude+", "+datosJSON.longitude);
        if (ipPintando==1){
            coordIp1={
                lat: datosJSON.latitude,
                lng: datosJSON.longitude
            };
        } else {
            coordIp2={
                lat: datosJSON.latitude,
                lng: datosJSON.longitude
            };            
        }
        marcarEnMapa(datosJSON.latitude,datosJSON.longitude);
    }

}

function pintarIp1(){
    ipPintando=1;
    peticionIPAjax(ip1.value);
}

function pintarIp2(){
    ipPintando=2;
    peticionIPAjax(ip2.value);  
}

var map=null;

function marcarEnMapa(latitud,longitud){

  var coord={
     lat: latitud,
     lng: longitud
  };

  if (!map){
     map = new google.maps.Map(document.getElementById("map"), {
         zoom: 3, //para que salgan todos los continentes, 10 una región
         center: coord
     });
  }
  var marker = new google.maps.Marker({
    position: coord,  // position a marcar en el mapa
    map: map          // map es el mapa en el que vamos a hacer la marca
  });


}
function calcularDist(){
  var distIp1Mi=google.maps.geometry.spherical.computeDistanceBetween(coordIp1, coordMi);
  var distIp2Mi=google.maps.geometry.spherical.computeDistanceBetween(coordIp2, coordMi);

  if (distIp1Mi<distIp2Mi){
    info.innerHTML+="La IP 1,"+ip1.value+", es la más cercana a ti<br>";
  }
  else{
    info.innerHTML+="La IP 2,"+ip2.value+", es la más cercana a ti<br>"; 
  }
}