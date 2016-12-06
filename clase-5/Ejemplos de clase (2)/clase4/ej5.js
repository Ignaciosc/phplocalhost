/*
    Objeto literal:
        Gracias a los corchetes puedo acceder a las propiedades de forma dinámica

        Estructura:
            objeto[variable];
*/

var perro = {
    nombre: 'Pancho',
    raza: 'mestizo',
    edad: 4,
    patas: 4,
    orejas: 2,
    pelo: 'corto',
    muerde: false,
    vacunas: [
        'quintuple',
        'sextuple',
        'antirrábica',
        'tos de las perreras'
    ]
}

var nombre = 'nombre';
var edad = 'edad';

console.log('El perro se llama: ' + perro[nombre]);
console.log(perro[nombre] + ' tiene ' + perro[edad] + ' años');
