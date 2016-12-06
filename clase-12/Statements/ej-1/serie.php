<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);
$idSerie = 5;
$query = $db->prepare('SELECT * from serie');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
foreach ($result as $key => $value) {
    if ($key == $idSerie) {
        foreach ($value as $key1 => $value1) {
            echo $key1 . ": " . $value1 . "<br>";
        }
    }
}


/*1. Realizar un archivo serie.php que muestre los datos de u
na​ serie. Para esto,
tendremos una variable $idSerie que será modificada directamente en el código
(ejemplo: $idSerie = 5;). La consulta debe hacerse a través de un statement.*/
