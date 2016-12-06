<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

/* 1. Generar una conexión a la última base de datos utilizada durante las clases de
MySQL aclarando en el DSN únicamente h
ost​ y ​ dbname​ .*/
