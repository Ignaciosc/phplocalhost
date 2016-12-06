<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

$query = $db->query('SELECT id, nombre as gen from genero');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
foreach ($result as $key => $value) {
    if (is_string($value)){
        echo $value;
        echo hola;
    }
    if (array($value)){
        foreach ($value as $key1 => $value1) {
            echo $value1 . '<br>';
        }
    }
}

/*1. Armar un archivo generos.php que arme un <ul> con todos los géneros de nuestra
base de datos.*/
