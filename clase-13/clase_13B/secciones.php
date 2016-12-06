<?php

require_once('requires.php');


function obtenerSecciones() {

    $repo = new sectionDatabaseRepository();

    return $repo->listAll();
}

 ?>
