/*
    Objeto literal:
        Un objeto es cualquier cosa de la vida que puede ser representado en
        código.

        Los objetos tienen propiedades que se utilizan para describirlo.
        Podemos utilizar strings, numbers, booleans, objetos
        y arrays.

        En Javascript se utilizan las llaves ({}) para establecer un objeto
        literal.

        Estructura:
            var miObjeto = {
                propiedad1: valor,
                propiedad2: valor
            };
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

console.log(perro);
