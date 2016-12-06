/*
    setInterval:
        Por medio de esta función podemos ejecutar varias veces el mismo
        código con un retraso establecido.

        Esta función retorna un valor numérico que se utiliza como ID y nos
        permite cancelar la ejecución de esta repetición con clearInterval().

        Estructura:
            window.setInterval(funcion, retraso);
            setInterval(funcion, retraso);
*/

var contador = 1;
var intervalo = 1000;
var idDelIntervalo;

function saludar() {
    console.log('MAGIA... ' + contador);

    if (contador < 5) {
        contador++;
    } else {
        var mensaje = 'No fué Mágia, fueron: ' + contador + ' intervalos';
        console.log(mensaje);
        window.clearInterval(idDelIntervalo);
    }
}

idDelIntervalo = window.setInterval(saludar, intervalo);
