<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

/*3. Agregar dentro del DSN el puerto deseado.*/
