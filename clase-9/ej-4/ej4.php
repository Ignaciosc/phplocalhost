<?php
    include('../ej-1/ej1.php');

    $cliente1 = new cliente;

    var_dump($cliente1);
    echo '<br>';

    $cliente2 = new cliente;

    var_dump($cliente2);
    echo '<br>';

    $cliente1->nombre = 'Ignacio';
    $cliente1->apellido = 'Santa Cruz';
    $cliente1->documento = 34630424;
    $cliente1->fechaDeNacimiento = '01/08/1989';
    $cliente1->email = 'ignaciosc89@gmail.com';
    $cliente1->password = 'pass1';

    $cliente2->nombre = 'Ignacio2';
    $cliente2->apellido = 'Santa Cruz2';
    $cliente2->documento = 346304242;
    $cliente2->fechaDeNacimiento = '01/08/19892';
    $cliente2->email = 'ignaciosc89@gmail.com2';
    $cliente2->password = 'pass12';

    var_dump($cliente1);
    echo '<br>';
    var_dump($cliente2);

 ?>

<!-- 4. Agregar datos a cada instancia de Cliente e imprimir nuevamente las instancias. -->

<!-- public $nombre;
public $apellido;
public $documento;
public $fechaDeNacimiento;
public $email;
public $password; -->
<!-- ('Nacho','Santa Cruz',34630424,'01/08/1989','ignaciosc89@gmail.com','password1') -->
