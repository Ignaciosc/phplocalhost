<?php

$dsn = 'mysql:host=localhoste;dbname=peliculas_clase_4';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);

/*2. ¿Qué sucede si utilizamos un h
ost​ o un ​ dbname​ erróneo? ¿Qué sucede si
utilizamos credenciales erróneas?*/
