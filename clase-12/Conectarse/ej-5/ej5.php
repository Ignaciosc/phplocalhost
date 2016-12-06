<?php

$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
//$db = new PDO($dsn, $db_user, $db_pass);

try {
$db = new PDO($dsn, $db_user, $db_pass);
}
catch( PDOException $Exception ) {
$Exception->getMessage();
//echo $Exception;
}


/*5. Modificar el código con una estructura ​ try/catch​ para que presente errores en la
conexión de forma más amigable.*/
