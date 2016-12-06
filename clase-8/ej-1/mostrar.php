<?php
    session_start();
    var_dump($_POST);
    if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 0;
    }
    if (isset($_POST['reiniciar'])) {
        $_SESSION["contador"] = 0;
    } else {
        $_SESSION["contador"]++;
    }
    header('location: modificar.php');
    exit;
 ?>


<!-- 1. Crear dos archivos. mostrar.php y modificar.php
a. mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
b. modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
debe incrementar su valor en 1. Probar las modificaciones en mostrar.php.  -->
