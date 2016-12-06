/*
    Objeto literal:

        Los objetos también tienen métodos que nos permiten interactuar con
        ellos.

        Los métodos son una propiedad del objeto que tienen asignado una
        función.

        Estructura:
            var miObjeto = {
                metodo: function() {
                    // código del metodo
                }
            }

            miObjeto.metodo();
*/

// definimos un objeto perro que tiene un metodo ladrar
var perro = {
    ladrar: function() {
        console.log('GUAU');
    }
}

// hacemos que el perro ladre
perro.ladrar();

// hacemos que el perro ladre
perro.ladrar();

// hacemos que el perro ladre
perro.ladrar();
