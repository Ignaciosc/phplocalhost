<?php
$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3306';
$db_user = 'root';
$db_pass = '123456';
$db = new PDO($dsn, $db_user, $db_pass);
$datos = $_POST;
$titulo = $_POST['titulo'];
$rating = $_POST['rating'];
$premios = $_POST['premios'];
$fecha = $_POST['mes'] . "/" . $_POST['dia'] . "/" . $_POST['anio'];
$time = strtotime($fecha);
$fecha_de_estreno = date('Y-m-d',$time);
$duracion = $_POST['duracion'];
$id_genero = $_POST['id_genero'];

$sql = "INSERT INTO pelicula (titulo, rating, premios, fecha_de_estreno, duracion, id_genero)
VALUES ('$titulo', $rating, $premios, '$fecha_de_estreno', $duracion, $id_genero)";
$query = $db->prepare($sql);
$query->execute();
$db = null;


/*2. Partiendo de agregarPelicula.php modificarlo para que al enviarse el formulario
inserte una nueva película en la base de datos utilizando statements.*/
