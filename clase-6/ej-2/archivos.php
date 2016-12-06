<?php

    // define('archivo', 'texto2.txt');
    // $archivo = 'texto2.txt';
    // $fp = fopen($archivo, 'w+');
    // fwrite($fp, 'Este texto pisa el anterior?');
    // fclose($fp);
    if (file_exists($archivo)) {
        $fp = fopen($archivo, 'w+');
        fwrite($fp, 'Este texto pisa el anterior?');
        fclose($fp);
    }
    // } else {
    //
    //     for ($i=0; $i < 100; $i++) {
    //         $fp = fopen(archivo, 'a+');
    //         file_put_contents(archivo, "Hola mundo! testing.\n", FILE_APPEND);
    //     }
    //     fclose($fp);
    // }



 ?>
<!-- archivos.php$archivo = "data.txt";
$persona = "Juan Perez\n";
file_put_contents($archivo, $persona,
FILE_APPEND | LOCK_EX); -->


 <!-- 2. Crear un archivo nuevo llamado ​ archivos.php​ .
 a. Crear una función que compruebe si existe un archivo llamado ​ texto.txt​  en el
 mismo directorio que ​ archivos.php​ . En el caso que exista debe abrirlo con
 derechos de lectura y escritura para agregarle información. En caso de que
 no exista, debe crearlo con derechos de lectura y escritura.
 b. Que se escriba “Hola mundo! testing.” 100 veces en el archivo 1 vez por
 renglón. Luego de esto que se cierre el archivo.
 c. Mostrar los contenidos del archivo ​ texto.txt​  leyendo todo el archivo junto.
 d. Mostrar los contenidos del archivo ​ texto.txt​  leyendo e imprimiendo línea por
 línea.
 e. Borrar el archivo ​ texto.txt
 f. Crear un nuevo archivo llamado ​ texto2.txt​  que contenga el texto: “Hola
 nuevamente mundo!”.
 g. Escribir en el archivo ​ texto2.txt​  “¿Este texto pisa el anterior?”. Y nos fijamos
 si efectivamente piso el texto que estaba en el archivo.
 h. Escribir en el archivo ​ texto2.txt​ : “YA NO!” luego del texto que ya existe.  -->
