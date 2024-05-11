class Edificio {
  constructor(calle, numero, codigoPostal) {
    // Propiedades
    this.calle = calle;
    this.numero = numero;
    this.codigoPostal = codigoPostal;
    this.plantas = new Array();
  }
  agregarPlantasYPuertas(numPlantas, puertas) {
    var plantas = this.plantas.length;
    // console.log("P"+plantas);
    var inicio = plantas <= 0 ? 0 : plantas;

    var totalPlantas = plantas + numPlantas;
    for (let i = inicio; i < totalPlantas; i++) {
      this.plantas[i] = new Array(puertas);
      for (let j = 0; j < puertas; j++) {
        this.plantas[i][j] = ""; // Propietario de esa puerta en blanco.
      }
    }
  }
  modificarNumero(numero) {
    this.numero = numero;
  }
  modificarCalle(calle) {
    this.calle = calle;
  }
  modificarCodigoPostal(codigo) {
    this.codigoPostal = codigo;
  }
  imprimeCalle() {
    return this.calle;
  }
  imprimeNumero() {
    return this.numero;
  }
  imprimeCodigoPostal() {
    return this.codigoPostal;
  }
  imprimeEdificio() {
    document.write(
      `<br/>- Construidoooo nuevo edificio en calle: ${this.imprimeCalle()}, No: ${this.imprimeNumero()}, CP: ${this.imprimeCodigoPostal()}`
    );
  }
  agregarPropietario(nombre, planta, puerta) {
    this.plantas[planta - 1][puerta - 1] = nombre;
    document.write(
      `<br/>- ${nombre} es ahora el propietario de la puerta ${puerta} de la planta ${planta}`
    );
  }
  imprimePlantas() {
    // Imprimirá las plantas y nombres de propietarios de cada puerta de un edificio.
    document.write(
      `<h2>Listado de propietarios del edificio calle ${this.calle}, número ${this.numero}</h2>`
    );
    for (let i = 0; i < this.plantas.length; i++) {
      for (let j = 0; j < this.plantas[i].length; j++) {
        document.write(`Propietario del piso ${j + 1} de la planta ${i + 1}: ${this.plantas[i][j]} <br/>`);
      }
    }
  }
}
