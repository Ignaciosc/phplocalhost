/*
    History:
        El objeto history representa el historial de documentos visitados en
        la actual sesión del browser.

        Estructura:
            window.history

        Propiedades:
            window.history.length // retorna la cantidad de items del historial

        Métodos:
            window.history.back() // vuelve al documento anterior
            window.history.go(nro) // vuelve o avanza en el historial
*/

if (confirm('Desea ir a la página anterior?')){
    window.history.back();
}
