<html>
<?php
require_once 'soporte.php';
if ($_POST) {
  $errores=Validator::validarUsuario($_POST);
  if(empty($errores)){
  $usuario = new Usuario($_POST);
  $usuario->setPassword($_POST["password"]);
  $repositorio->getUserRepository()->guardarUsuario($usuario);
}}
 ?>
  <head>
  <title>Registracion</title>
  </head>
  <body>
    <h1>Hola! Registrate!</h1>
  <?php if (!empty($errores)){ ?>
    <div id="errores">
    <ul>
        <?php foreach ($errores as $error){?>
          <li>
          <?php echo $error;?>
        </li>
      <?php  }}?>
    </div>

    <form action="register.php" method="POST">
      <div>
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre" value=""></input>
      </div>
      <div>
        <label for="apellido">Apellido:</label>
        <input id="apellido" type="text" name="apellido" value=""></input>
      </div>
      <div>
        <label for="mail">Mail:</label>
        <input id="mail" type="email" name="mail" value=""></input>
      </div>
      <div>
        <label for="password">Contrase&ntilde;a:</label>
        <input id="password" type="password" name="password"></input>
      </div>
      <div>
        <label for="cpassword">Confirmar Contrase&ntilde;a:</label>
        <input id="cpassword" type="password" name="cpassword"></input>
      </div>
      <div>
				<input id="submit" type="submit" name="submit" value="Enviar"></input>
			</div>
		</form>
  </body>
</html>
