<?php
    $num = rand(0, 100);
    if ($num > 50 && ($num % 2) == 0) {
        echo $num;
        echo "pasa la condición";
    } else {
        echo $num;
        echo "NO pasa la condición";
    }
