<?php
    $arrayNum = [];
    for ($i=0; $i < 10 ; $i++) {
        $arrayNum[$i] = rand(0, 10);
    }
    foreach ($arrayNum as $valor) {
        $valor == 5 ? break : ;
    }
