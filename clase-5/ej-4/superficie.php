<?php

    function triangulo($base, $altura) {
        return $base * $altura / 2;
    }
    function rectangulo($ladoMenor, $ladoMayor) {
        return $ladoMenor * $ladoMayor;
    }
    function cuadrado($lado) {
        return $lado * $lado;
    }
    function circulo($radio) {
        return pi() * $radio * $radio;
    }

    echo triangulo(4, 3) . '<br>';
    echo rectangulo(2, 4) . '<br>';
    echo cuadrado(4) . '<br>';
    echo circulo(4);



    // Generar un archivo llamado ​ superficie.php​ :
    // a. Definir una función triangulo() que retorne su superficie.
    // b. Definir una función rectangulo() que retorne su superficie.
    // c. Definir una función cuadrado() que retorne su superficie.
    // d. Utilizando la función ​ pi()​ , definir una función circulo() que retorne su superficie.
