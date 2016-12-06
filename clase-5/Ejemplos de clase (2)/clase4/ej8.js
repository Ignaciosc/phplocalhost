/*
    Objeto literal:
        Los métodos también pueden recibir parametros ya que son una función.
*/

// definimos un objeto perro que tiene un metodo ladrar
var perro = {
    entrenar: function(premio) {
        if (premio) {
            console.log('Da la pata');
        } else {
            console.log('Te mira');
        }
    }
}

// Con premio tenemos un perro muy copado!
perro.entrenar(true);

// Sin premio no esperes que te preste mucha atención
perro.entrenar(false);
