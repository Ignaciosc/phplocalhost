/*
    Objeto literal:
        Al igual que las propiedades podemos crear un método sin estar antes
        definído en el objeto.
*/

var perro = {};

perro.ladrar = function() {
    console.log('GUAU');
}

perro.ladrar();
perro.ladrar();
perro.ladrar();
