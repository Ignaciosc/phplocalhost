/*
    Objeto literal:
        A un objecto se le pueden agregar propiedades aún si estas no
        fueron declaradas en la definición del objeto.

        Tip:
            Hay que tener cuidado de no escribir mal las propiedades ya que
            esto nos puede generar un error, como también estaríamos creando
            una nueva propiedad que no queremos.
*/

var perro = {};

perro.nombre = 'Pancho';
perro.raza = 'mestizo';
perro.edad = 4;
perro.patas = 4;
perro.orejas = 2;
perro.pelo = 'corto';
perro.muerde = false;
perro.vacunas = [
    'quintuple',
    'sextuple',
    'antirrábica',
    'tos de las perreras'
];

console.log(perro);
