/*
    Timers:
        Javascript tiene funciones nativas que nos permiten retrasar la
        ejecución de un código que nosotros querramos:

        setTimeout:
            La función setTimeout se utiliza cuando queremos que nuestro
            código se ejecute una vez en un tiempo establecido.

            Retorna un valor numérico que se utiliza como ID de este timeout,
            por ejemplo para cortar la ejecución del mismo con
            window.clearTimeout()

            Estructura:
                window.setTimeout(funcion, retraso);
                setTimeout(funcion, retraso);
*/
// El valor que se utiliza como retraso es en milisegundos, en este caso 5 segundos
var retraso = 5000;

// Función que se va a ejecutar dentro del tiempo que nosotros establecemos
function saludar() {
    console.log('Hola me ejecuté después de: ' + (retraso / 1000)  + ' segundos');
}

// Mensaje copado para esperar la 'mágia!'
console.log('Esperemos unos segundos!!');

// Guardamos el id del timeout por si en algún momento queremos / necesitamos borrar la ejecucción de este tiemeout.
var idDelTimeout = window.setTimeout(saludar, retraso);
