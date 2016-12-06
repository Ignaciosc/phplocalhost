/*
    Location:
        El objeto location representa la URL. Por medio de sus propiedades
        podemos acceder a las distintas partes de la URL como también
        navegar a otro documento.

        Estructura:
            window.location
*/

// representa al objeto que está mapeando una URL
console.log(window.location);

// muestra la URL como string. Podemos utilizar href para asignar otra URL.
console.log(window.location.href);

// muestra el protocolo: http, https
console.log(window.location.protocol);

// muestra el host de la URL
console.log(window.location.host);

// muestra sólo el nombre del host
console.log(window.location.hostname);

// muestra el puerto de la URL
console.log(window.location.port);

// muestra el path del recurso
console.log(window.location.pathname);

// muestra los parámetros del query string
console.log(window.location.search);

// muestra el contenido de hash
console.log(window.location.hash);


var navegarAGoogle = confirm('Quiere ir a google.com?');

if (navegarAGoogle) {
    window.location.href = 'http://www.google.com';
}
