/*
    Confirm:
        Otro de los métodos del objeto windows es confirm que nos permite
        mostrar un mensaje al usuario y obtener un valor booleano (true/false)
        como respuesta.

        Estructura:
            var respuesta = confirm(mensaje);
            var respuesta = window.confirm(mensaje);
*/

var usuarioMayorDeEdad = confirm('Es ud. mayor de edad?');

console.log(usuarioMayorDeEdad);

if (usuarioMayorDeEdad) {
    console.log('El usuario es mayor de edad y puede ver el contenido');
} else {
    console.log('El usuario no tiene que ver este contenido');
}
