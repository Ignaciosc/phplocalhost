<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

$query = $db->query('select g.nombre, count(p.id)
from genero as g
inner join pelicula as p on g.id = p.id_genero
group by g.nombre');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
foreach ($result as $key => $value) {
    if (array($value)){
        foreach ($value as $key1 => $value1) {
            echo $value1 . '<br>';
        }
    }
}


/*2. Modificar generos.php para que por cada uno de los géneros, además, arme un
sector en donde indique todas las películas de dicho género.*/
