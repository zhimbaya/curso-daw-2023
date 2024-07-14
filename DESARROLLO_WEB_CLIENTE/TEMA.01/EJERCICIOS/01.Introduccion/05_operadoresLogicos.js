/* Operadores lógicos
&& and
|| Or
! Not

*/

const nombre = 'Diego';
const edad = 17;
const tieneEntrada = true;
const tienePermiso = true;

const permitirAcceso = edad >= 18 && tieneEntrada;
console.log('Acceso permitido al concierto: ' + permitirAcceso);

const permitirAcceso2 = (edad >= 18 && tieneEntrada) || tienePermiso;
console.log('Acceso permitido al concierto: ' + permitirAcceso2);

const variable = false;
console.log(!variable);
