/*
    Abriendo nuevas ventanas:
        El objeto window tiene un metodo llamado open() que nos permite
        abrir e interactuar con nuevas ventanas.

        Estructura:
            window.open(url, nombreDeVentana, stringConPropiedades);
*/

// creamos una nueva ventana
var nuevaVentana = window.open('popup.html', '_blank', 'width=400,height=400');

// le cambiamos el tamaño a la nueva ventana
nuevaVentana.onload = function() {
    nuevaVentana.resizeTo(800, 800);

    // Opener es una referencia a la pagina que abrió a la nueva ventana
    console.log(nuevaVentana.opener);
    nuevaVentana.opener.document.body.style.backgroundColor = '#f0db4e';
};
