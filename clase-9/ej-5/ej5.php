<?php
    class cliente {
        public $nombre;
        public $apellido;
        public $documento;
        public $fechaDeNacimiento;
        public $email;
        public $password;
        public function __construct($nombre,$apellido,$documento,$fechaDeNacimiento,$email,$password) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->documento = $documento;
            $this->fechaDeNacimiento = $fechaDeNacimiento;
            $this->email = $email;
            $this->password = $password;
        }
    }


 ?>

 <!-- 5. Crear un constructor para la clase, que permita asignar los valores para los datos del
 Cliente. -->
