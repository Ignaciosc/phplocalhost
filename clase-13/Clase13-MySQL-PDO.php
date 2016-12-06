<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

Otras funciones útiles de PDO 

Existen tres funciones importantes para obtener información de la consulta ejecutada sin tener que recorrer los resultados:

A) Obtener el id de la última fila o secuencia insertada en la base de datos.

public string PDO::lastInsertId ([ string $name = NULL ] );

El parámetro $name opcional, sirve para indicar el nombre de columna. Como PDO depende de los drivers para cada gestor de base de datos soportado, en alguno de estos quizás sea necesario especificar el nombre de columna que almacena los identificadores. Como ocurre en PostgreSQL.

<?php
$conn = new PDO('mysql:dbname=test;host=127.0.0.1', 'user', 'password');  
$stmt = $conn->prepare('INSERT INTO test (name) VALUES (:name)');  
$stmt->execute([':name' => 'foo']);  
var_dump($conn->lastInsertId());  
?>

Recordá que la función es de la clase PDO y no de PDOStatement.

B) Obtener el numero de filas afectadas por la ultima sentencia de inserción, borrado o actualización. Función de la clase PDOStatement.

 public int PDOStatement::rowCount ( void )  

<?php
$stmt = $con->prepare('DELETE FROM usuario');  
$stmt->execute();  
$count = $stmt->rowCount();  
print("se borraron: $count filas.\n");  
?>

Esta función es muy útil en el caso de que queremos borrar una fila, por ejemplo un único usuario. De esta manera comprobaríamos cuantas filas se han borrado y si el resultado es cero es que ha fallado y si es 1 es que ha funcionado.

Asignación con marcadores anónimos

Para vincular los marcadores anónimos con su correspondiente valor se puede utilizar bindParam o bindValue:

ATENCION: $pdo->prepare() usando marcadores anónimos ? ,trata todas las variables como si fueran cadenas, por lo que usará comillas para delimitar sus valores por defecto.

<?php
# Asignamos variables a cada marcador, indexados del 1 al 3
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $addr);
$stmt->bindParam(3, $city);
 
# Insertamos una fila.
$name = "Daniel";
$addr = "1 Wicked Way";
$city = "Arlington Heights";
$stmt->execute();
 
# Insertamos otra fila con valores diferentes.
$name = "Steve";
$addr = "5 Circle Drive";
$city = "Schaumburg";
$stmt->execute();
?>

Otra forma de asignación con marcadores anónimos a través de un array asociativo:

<?php
# Los datos que queremos insertar
$datos = array('Cathy', '9 Dark and Twisty Road', 'Cardiff');
 
$stmt = $pdo->prepare("INSERT INTO colegas (name, addr, city) values (?, ?, ?)");
$stmt->execute($datos);
?>

Diferencia entre el uso de bindParam y bindValue

Con bindParam se vincula la variable al parámetro y en el momento de hacer el execute es cuando se asigna realmente el valor de la variable a ese parámetro.
Con bindValue se asigna el valor de la variable a ese parámetro justo en el momento de ejecutar la instrucción bindValue.


Ejemplo de diferencia entre bindParam y bindValue:

<?php
// Ejemplo con bindParam:
$sex = 'hombre';
$s = $dbh->prepare('SELECT name FROM studiantes WHERE sexo = :sexo');
$s->bindParam(':sexo', $sexo);
$sex = 'mujer';
$s->execute(); // se ejecutó con el valor WHERE sexo = 'mujer'
?>

<?php
// El mismo ejemplo con bindValue:
$sex = 'hombre';
$s = $dbh->prepare('SELECT name FROM students WHERE sexo = :sexo');
$s->bindValue(':sexo', $sexo);
$sex = 'mujer';
$s->execute(); // se ejecutó con el valor WHERE sexo = 'hombre'
?>

Asignación con marcadores conocidos

Los marcadores conocidos es la forma más recomendable de trabajar con PDO, ya que a la hora de hacer el bindParam o el bindValue se puede especificar el tipo de datos y la longitud máxima de los mismos. 

Formato de bindParam con marcadores conocidos:

   bindParam(':marcador', $variableVincular, TIPO DATOS PDO)



Ejemplo de uso de bindParam:

<?php

   $stmt->bindParam(':calorias', $misCalorias, PDO::PARAM_INT);
   $stmt->bindParam(':apellidos', $misApellidos, PDO::PARAM_STR, 35);  // 35 caracteres como máximo.
   
?>

Con marcadores conocidos quedaría de la siguiente forma:

<?

# El primer argumento de bindParam es el nombre del marcador y el segundo la variable que contendrá los datos.
# Los marcadores conocidos siempre comienzan con : 
$stmt->bindParam(':name', $name);
$name='Pepito';
$stmt->execute();

# Otra forma es creando un array asociativo con los marcadores y sus valores:
# Los datos a insertar en forma de array asociativo
$datos = array( 'name' => 'Cathy', 'addr' => '9 Dark and Twisty', 'city' => 'Cardiff' );
 
# Fijarse que se pasa el array de datos en execute().
$stmt = $pdo->prepare("INSERT INTO colegas (name, addr, city) value (:name, :addr, :city)");
$stmt->execute($datos);

# La última instrucción se podría poner también así:
$stmt->execute(array(
 'name' => 'Cathy',
 'addr' => '9 Dark and Twisty',
 'city' => 'Cardiff'
 ));
 ?>

Otra característica de los marcadores conocidos es que nos permitirán trabajar con objetos directamente en la base de datos, asumiendo que las propiedades de ese objeto coinciden con los nombres de los campos de la tabla en la base de datos.

Ejemplo de uso de marcadores conocidos y objetos:

<?php

# Un objeto sencillo

class person {
    public $name;
    public $addr;
    public $city;
 
    function __construct($n,$a,$c) {
        $this->name = $n;
        $this->addr = $a;
        $this->city = $c;
    }
    # etc ...
}
 
$cathy = new person('Cathy','9 Dark and Twisty','Cardiff');
 
# Preparación de la consulta
$stmt = $pdo->prepare("INSERT INTO colegas (name, addr, city) value (:name, :addr, :city)");

# Inserción del objeto
$stmt->execute((array)$cathy);

?>

Transacciones

Son un mecanismo que nos asegura que todas y cada de las consultas que las forman van a ser ejecutadas, de forma segura y sin interferencia de otras conexiones. En el caso de que falle alguna consulta, la transacción no se llevará a cabo.
Pero recordá que PDO trabaja como capa de abstracción sobre múltiples tipos de gestores de bases de datos así que cada uno de estos gestores tienen sus reglas y es posible que alguno no admita el mecanismo de transacciones. Con MySQL, por ejemplo, hay que tener cuidado con el tipo de motores de almacenamiento de las tablas. Ya que todos no soportan las transacciones. Los tipos de tablas MyISAM no permiten transacciones. Así que transacciones solo se pueden llevar a cabo sobre tablas InnoDB.

Vamos a ver el proceso de crear transacciones:

1) Iniciar la transacciones.

PDO, al igual que con MySQLi, ejecuta por defecto el modo "autocommit". Lo que significa que cada consulta ejecutada se trata como una transacción implícitamente. Por lo tanto el primer paso para usar las transacciones es desactivar este modo. Y así poder decidir donde empieza y donde acaba nuestra transacción. Con lo que la transacción no se llevará a cabo hasta que se lo indiquemos.
Para ello utilizaremos la siguiente función:

 public bool PDO::beginTransaction ( void )  


Que devolverá True en caso de acierto y False en caso de error. Además, Si el controlador subyacente no admite transacciones, se lanzará una PDOException (independientemente de la configuración del manejo de errores: esto es siempre una condición de error serio).

2) Crear consultas y  finalizar o revertir transacción

Una vez se han creado las consultas podemos finalizar la transacción si no ha habido ningún error. Para ello nos podemos ayudar de las excepciones. O revertir la transacción, en caso de algún error.
Antes de mostrar un ejemplo completo vamos a presentar una función de la clase PDO que no habíamos mostrado hasta ahora.

 public int PDO::exec ( string $statement )  


Dicha función ejecuta una sentencia sql y devuelve el numero de filas afectadas por dicha ejecución. Podría considerarse una alternativa similar a query(). Sin embargo no devuelve  los resultados de una sentencia SELECT. Por lo tanto su funcionalidad esta limita a consultas donde no vayamos a obtener un conjunto de resultados (selecciones). Donde solo nos importe que se ejecuten correctamente. Pero para ejecutar transacciones, donde lo normal no ejecutar consultas SELECT, es ideal.

Función para ejecutar la transacción. Hasta que no se indique ninguna de las consultas de la transacción se habrán ejecutado.

 public bool PDO::commit ( void )  


Función para revertir  la transacción. Con dicha función cancelaremos la transacción.

 public bool PDO::rollBack ( void )  


Hay que tener en cuenta que tanto si se confirma una transacción o se revierte, devolveremos la conexión de base de datos a modalidad "autocommit" hasta que la siguiente llamada a PDO::beginTransaction() inicia una nueva transacción.

<?php
 try {  
   $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);  
   echo 'Conectado a la base de datos<br />';  
   /*** Poner el modo de errores para detectar excepciones ***/  
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
   /*** Empezamos la transacción ***/  
   $dbh->beginTransaction();  
   /*** Creamos tabla ***/  
   $table = "CREATE TABLE animals ( animal_id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
   animal_type VARCHAR(25) NOT NULL,  
   animal_name VARCHAR(25) NOT NULL   
   )";  
   $dbh->exec($table);  
   /*** insertamos datos ***/  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('emu', 'johnny')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('funnel web', 'bruce')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('lizard', 'liz')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('dingo', 'dango')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('kangaroo', 'bob')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('wallaby', 'wally')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('wombat', 'rick')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('koala', 'mowgli')");  
   $dbh->exec("INSERT INTO animals (animal_type, animal_name) VALUES ('kiwi', 'tonny')");  
   /*** Enviamos la transacción ***/  
   $dbh->commit();  
   echo 'Datos insertados correctamente<br />';  
 }  
 catch(PDOException $e)  {  
   /*** revertimos transacción por agun fallo ***/  
   $dbh->rollback();  
   echo $sql . '<br />' . $e->getMessage();  
 }  
?>

</body>
</html>