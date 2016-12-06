<?php
    $stop = rand(1, 100);
    for ($i=1; $i < 101; $i++) {
        if ($i == $stop) {
            break;
        }
        echo $i;
        echo "<br/>";
    }
