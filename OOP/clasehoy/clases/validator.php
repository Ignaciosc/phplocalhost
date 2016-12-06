<?php

class Validator{
private function __construct(){

}
public static function validarUsuario($miUsuario){
  $errores=[];

  if (trim($miUsuario["nombre"])== "") {
    $errores[] = "Falta el nombre";
  }
  if (trim($miUsuario["apellido"])== "") {
    $errores[] = "Falta el apellido";
  }
  if (trim($miUsuario["password"])== "") {
    $errores[] = "Falta el password";
  }
  if (trim($miUsuario["cpassword"])== "") {
    $errores[] = "Falta el cpassword";
  }
  if($miUsuario["cpassword"]!==$miUsuario["password"]){
    $errores[]= " Las contraseñas nos coinciden";
  }
  if (trim($miUsuario["mail"])== "") {
    $errores[] = "Falta el mail";
  }
  if (!filter_var($miUsuario["mail"], FILTER_VALIDATE_EMAIL)) {
    $errores[] = "esta mal el formato del mail";
  }
  return $errores;
}






}
