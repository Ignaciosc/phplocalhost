/*
    Alert:
        Los browsers tienen un objeto windows que es un objeto global a toda
        la aplicación. Al definir una variable global se crea en el objeto
        window.

        Este objeto tiene métodos propios que nos permiten interactuar con el
        browser.

        El método alert nos permite mostrar un msj en la pantalla con un botón
        para cerrarlo.

        Este método se debe usar sólo para informar al usuario sin esperar
        confirmación del mismo.

        Estructura:
            alert(mensaje);
            window.alert(mensaje)

        Práctica adicional:
            Ejecutar estos comando desde la consola del browser
*/

// Podemos utilizar este método llamandolo como una función
alert('Bienvenido a Javascript');

// Podemos llamar esta función como método del objeto window
window.alert('alert() se puede llamar como método del objeto window o como función alert()');
