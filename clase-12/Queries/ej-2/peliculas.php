<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

$query = $db->query('SELECT id, titulo as peli from pelicula');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
foreach ($result as $key => $value) {
    if (is_string($value)){
        echo $value;
    }
    if (array($value)){
        foreach ($value as $key1 => $value1) {
            echo $value1 . '<br>';
        }
    }
}


/*2. Armar un archivo peliculas.php que arme un <ul> con todas las películas de nuestra
base de datos.*/
