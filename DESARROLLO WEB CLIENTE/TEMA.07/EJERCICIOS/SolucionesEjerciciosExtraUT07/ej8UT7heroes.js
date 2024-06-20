const requestURL =
  "https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json";

const request = new XMLHttpRequest();
request.open("GET", requestURL);
request.send();
request.onload = function () {
  const superHeroes = JSON.parse(request.responseText);
  crearCabecera(superHeroes);
  crearSeccion(superHeroes);
};

function crearCabecera(jsonObj) {
  var header = document.createElement("header");
  var miH1;
  var miParrafo = document.createElement("p");
  var nodoTexto;
  var cad;

  document.getElementsByTagName("body")[0].appendChild(header);
  miH1 = document.createElement("h1");
  cad = jsonObj["squadName"];
  nodoTexto = document.createTextNode(cad);
  miH1.appendChild(nodoTexto);
  header.appendChild(miH1);
  miParrafo = document.createElement("p");
  cad = "Hometown: " + jsonObj["homeTown"] + " // Formed: " + jsonObj["formed"];
  nodoTexto = document.createTextNode(cad);
  miParrafo.appendChild(nodoTexto);
  header.appendChild(miParrafo);
}

function crearSeccion(jsonObj) {
  var section = document.createElement("section");
  const heroes = jsonObj["members"];

  document.getElementsByTagName("body")[0].appendChild(section);

  for (var i = 0; i < heroes.length; i++) {
    var miArticle = document.createElement("article");
    var miH2 = document.createElement("h2");
    var miParrafo1 = document.createElement("p");
    var miParrafo2 = document.createElement("p");
    var miParrafo3 = document.createElement("p");
    var miLista = document.createElement("ul");
    var cad;
    var nodoTexto;

    cad = heroes[i].name;
    nodoTexto = document.createTextNode(cad);
    miH2.appendChild(nodoTexto);

    cad = "Secret identity: " + heroes[i].secretIdentity;
    nodoTexto = document.createTextNode(cad);
    miParrafo1.appendChild(nodoTexto);

    cad = "Age: " + heroes[i].age;
    nodoTexto = document.createTextNode(cad);
    miParrafo2.appendChild(nodoTexto);

    cad = "Superpowers:";
    nodoTexto = document.createTextNode(cad);
    miParrafo3.appendChild(nodoTexto);

    const superPowers = heroes[i].powers;
    for (var j = 0; j < superPowers.length; j++) {
      var elemLista = document.createElement("li");
      cad = superPowers[j];
      nodoTexto = document.createTextNode(cad);
      elemLista.appendChild(nodoTexto);
      miLista.appendChild(elemLista);
    }
    
    miArticle.appendChild(miH2);
    miArticle.appendChild(miParrafo1);
    miArticle.appendChild(miParrafo2);
    miArticle.appendChild(miParrafo3);
    miArticle.appendChild(miLista);
    section.appendChild(miArticle);
  }
}
