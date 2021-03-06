/*
    setInterval:
        Por medio de esta función podemos ejecutar varias veces el mismo
        código con un retraso establecido.

        Esta función retorna un valor numérico que se utiliza como ID y nos
        permite cancelar la ejecución de esta repetición con clearInterval().

        Estructura:
            window.setInterval(funcion, retraso, parametros);
            setInterval(funcion, retraso, parametros);
*/


var contador = 1;
var intervalo = 1000;
var cantidadDeVeces = 5;
var idDelIntervalo;

function saludar(cantidadDeVeces) {
    console.log('MAGIA... ' + contador);

    if (contador < cantidadDeVeces) {
        contador++;
    } else {
        var mensaje = 'No fué Mágia, fueron: ' + contador + ' intervalos';
        console.log(mensaje);
        window.clearInterval(idDelIntervalo);
    }
}

idDelIntervalo = window.setInterval(saludar, intervalo, cantidadDeVeces);
