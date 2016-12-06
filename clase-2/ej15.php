<?php
    $contador = 0;
    $vueltas = 0;
    do {
        $moneda = rand(0, 1);
        $moneda ? $contador++ : $contador ;
        $vueltas++;
        echo $moneda . "<br/>";
    } while ($contador < 5);
    echo $vueltas;
