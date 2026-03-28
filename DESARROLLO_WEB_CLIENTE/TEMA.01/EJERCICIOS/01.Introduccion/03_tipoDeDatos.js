// Cadena de texto
const nombre = 'Diego';
const parrafo = 'Este es un "parrafo"';
const parrafo2 = "Este es un 'parrafo'";
const parrafo3 = 'Este es un \'parrafo\'';

// número
const numero = 4;
const numero2 = -4.123;

// boleano
const usuarioConectado = false;
const mayorQue = 1 > 2;
console.log (mayorQue);

// array
const arreglo = ['texto',456,true,{propiedad:'valor'},[1,2,3,4]];
console.log(arreglo);

// objeto
const persona = {
  nombre: 'Diego',
  edad: 38,
  coche: {
    marca: 'opel',
    color: 'negro',
  },
};
console.log(persona.coche.marca);

// functions
function hola(){
  console.log('hola');
}

hola();
// Null , lo podemos utilizar cuando queremos reiniciar una variable.
const miVar = null;
// undefined, lo utiliza el propio navegador o javascript.
cons miVar2 = undefined;
