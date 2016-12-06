/*
    Objeto literal:
        Podemos acceder a cualquier propiedad:
            objeto.propiedad;
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

console.log('El perro es: ', perro.raza);

console.log('El perro tiene las siguientes vacunas: ');

perro.vacunas.forEach(function(nombreVacuna, index) {
    console.log('  ' + index + '. ' + nombreVacuna);
});

if (perro.muerde) {
    console.log('no tocar el perro');
} else {
    console.log('Hora de divertirnos, jugar y tocar a ' + perro.nombre + '!!!');
}
