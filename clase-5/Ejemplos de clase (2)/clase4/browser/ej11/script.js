/*
    setTimeout:
        Podemos pasarle parámetros a la función que se ejecutará en el setTimeout

        Estructura:
            window.setTimeout(funcion, retraso, [parametros]);
            setTimeout(funcion, retraso, [parametros]);
*/
// El valor que se utiliza como retraso es en milisegundos, en este caso 5 segundos
var retraso = 5000;

// Función que se va a ejecutar dentro del tiempo que nosotros establecemos
function saludarEn(segundos) {
    console.log('Hola me ejecuté después de: ' + segundos  + ' segundos');
}

// Mensaje copado para esperar la 'mágia!'
console.log('Esperemos unos segundos!!');

// Pasamos como tercer parámetro la cantidad de segundos que queremos que muestre
var idDelTimeout = window.setTimeout(saludarEn, retraso, (retraso / 1000));
