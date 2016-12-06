<?php
class cliente {
    private $nombre;
    private $apellido;
    private $documento;
    private $fechaDeNacimiento;
    private $email;
    private $password;
    private function __construct($nombre,$apellido,$documento,$fechaDeNacimiento,$email,$password) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->email = $email;
        $this->password = $password;
    }

    $cliente1 = new cliente('Nacho','Santa Cruz',34630424,'01/08/1989','ignaciosc89@gmail.com','password1');
    $cliente2 = new cliente('Nacho2','Santa Cruz2',346304242,'01/08/19892','ignaciosc89@gmail.com2','password12');

    echo $cliente1->nombre;

}




 ?>
