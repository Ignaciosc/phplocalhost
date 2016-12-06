<?php

    $a = ['a' => 1, 'b' => 2, 'c' => 'Yo <3 JSON'];
    echo json_encode($a) . '<br>';
    $b = json_encode($a);
    echo $b . '<br>';
    echo json_decode($b, true)['c'] . ' | ' . json_decode($b, true)['a'] . ' | ' . json_decode($b,true)['b'];


 ?>


 <!-- 1. Crear una variable $a que contenga un array ( ​ 'a'​ =>​ 1 ​ , ​ 'b'​ =>​ 2 ​ , ​ 'c'​ =>​ 'Yo <3 JSON'​ ):
 a. Hacer echo de la variable $a.
 b. Utilizando ​ json_encode​ , convertir el array en un json.
 c. Hacer echo de la variable $a.
 d. Crear una nueva variable $b que contenga el ​ json_encode​  de la variable $a.
 e. Hacer echo de $b.
 f. Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $b.  -->
