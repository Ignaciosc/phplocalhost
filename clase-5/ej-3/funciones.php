<?php
    $secuencia = [];
    define('numeroMagico', 100);

    function mayor($num1, $num2, $num3 = '') {
        (!$num3) ? $joker = numeroMagico : $joker = $num3;
        if ($num1 > $num2) {
            if ($num1 > $joker) {
                return $num1;
            } else {
                return $joker;
            }
        } else {
            return $num2;
        }
    }

    function tabla($base, $lim = '') {
        (!$lim) ? $range = numeroMagico - $base : $range = $lim - $base;
        for ($i = 0; $i <= $range ; $i++) {
            $secuencia[$i] = $base + $i;
        }
        foreach ($secuencia as $value) {
            echo $value . '<br>';
        }
    }

    echo mayor(4, 3);
    echo '<br>';
    tabla(20);
 ?>


<!-- Generar un archivo llamado ​ funciones.php​ :
a. Definir una función mayor() que reciba 3 números y devuelva el mayor.
b. Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un
array con la secuencia de números desde el numero base hasta el numero limite.
c. Definir una constante llamada numeroMagico, y que contenga un número.
d. Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con
numeroMagico.
e. Modificar tabla para que si recibe un sólo parámetro utilice numeroMagico como límite.  -->
