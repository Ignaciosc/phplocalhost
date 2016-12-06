<?php

    include 'funciones.php';
    include 'superficie.php';

    $circulo1 = circulo(3);
    $circulo2 = circulo(4);
    $circulo3 = circulo(5);

    echo mayor($circulo1, $circulo2, $circulo3);



// 6. Crear un archivo ​ todoJunto.php​  que incluya el archivo ​ funciones.php​  y ​ superficie.php​  en donde
// se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre
// ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.
