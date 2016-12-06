<?php
    include('../ej-5/ej5.php');

    $cliente1 = new cliente('Nacho','Santa Cruz',34630424,'01/08/1989','ignaciosc89@gmail.com','password1');
    $cliente2 = new cliente('Nacho2','Santa Cruz2',346304242,'01/08/19892','ignaciosc89@gmail.com2','password12');

    var_dump($cliente1);
    echo '<br><br>';
    var_dump($cliente2);

    echo $cliente1->nombre;
 ?>


 <!-- 6. Crear dos nuevos Clientes, asignando los datos utilizando el constructor. ¿Al ejecutar,
 que sucede con las instancias anteriores? ¿Cómo podemos solucionarlo? -->
