/*
    Objeto literal:
    También podemos sobrescribir una propiedad:
        objeto.propiedad = 'nuevo valor';
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

console.log('Nombre del perro antes de ser adoptado: ' + perro.nombre);

perro.nombre = 'Ciro';
console.log('Nombre del perro luego de ser adoptado: ' + perro.nombre);
