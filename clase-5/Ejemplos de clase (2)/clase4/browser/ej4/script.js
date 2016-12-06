/*
    Prompt:
        El objeto window tiene otro método llamado prompt que nos permite
        interactuar con el usuario ya que le podemos pedir que ingrese
        un valor.

        Estructura:
            var respuesta = prompt(mensaje);
            var respuesta = window.prompt(mensaje);
*/

var nombre = prompt('Escribe tu nombre');
console.log(nombre);

var apellido = window.prompt('Escribe tu apellido');
console.log(apellido);

alert('Bienvenida/o ' + nombre + ' ' + apellido + '!!!');
