/*
    Objeto literal:

        Otra forma de acceder a las propiedades es por medio de los corchetes.

        Estructura:
            var miObjeto = {
                propiedad1: valor
            }

            miObjeto['propiedad1'];
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


console.log('El perro se llama: ' + perro['nombre']);
console.log(perro['nombre'] + ' tiene ' + perro['edad'] + ' años');
