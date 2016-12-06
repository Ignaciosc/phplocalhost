<?php
require_once('requires.php');

$errores = [];
if ($_POST)
{
	$errores = validar($_POST, $_FILES['avatar']);
	if(!count($errores))
	{
		$errores = register($_POST, $_FILES['avatar']);
	}
}
?>

<?php echo htmlOpen('Registración'); ?>
	<?php echo pageHeader('Registración'); ?>
	<?php if (count($errores)){ ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Error!</strong><br/>
			<?php foreach($errores as $field => $message) {
				echo '<b>' . $field . ': </b>' . $message . '<br/>';
			} ?>
		</div>
	<?php } ?>
	<form class="container" method="post" action="" enctype="multipart/form-data">
		<div class="form-group <?php echo (isset($errores['nombre']) ? 'has-error' : '') ?>">
			<label for="exampleInputEmail1">Nombre</label>
			<input type="text" name="nombre" value="<?php echo(isset($_POST['nombre']) ? $_POST['nombre'] : '') ?>" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
			<div><?php echo (isset($errores['nombre']) ? $errores['nombre'] : '') ?></div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Apellido</label>
			<input type="text" name="apellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputUsername1">Username</label>
			<input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password Confirm</label>
			<input type="password" name="pass_confirm" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<label>Secciones</label>
		<?php foreach (obtenerSecciones() as $seccion){ ?>
			<div class="checkbox">
				<label>
					<?php if(isset($_POST['secciones']) && in_array($seccion->getId(), $_POST['secciones'])) { ?>
						<input type="checkbox" value="<?php echo $seccion->getId(); ?>" name="secciones[]" checked="checked"> <?php echo $seccion->getName(); ?>
					<?php } else { ?>
						<input type="checkbox" value="<?php echo $seccion->getId(); ?>" name="secciones[]"> <?php echo $seccion->getName(); ?>
					<?php } ?>
				</label>
			</div>
		<?php } ?>
		<label>Fecha de Nacimiento</label>
		<div class="form-group">
			<select name="dia">
				<option value="">Día</option>
				<?php for ($i = 1; $i <= 31; $i++):
					if (isset($_POST['dia']) && $_POST['dia'] == $i)
					{ ?>
						<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
						<?php
					}
					else
					{ ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
					}
				endfor; ?>
			</select>
			<select name="mes">
				<option value="">Mes</option>
				<?php for ($i = 1; $i <= 12; $i++)
				{ ?>
					<option value="<?php echo $i; ?>" <?php echo(isset($_POST['mes']) && $_POST['mes'] == $i ? 'selected="selected"' : '') ?>><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<select name="anio">
				<option value="">Año</option>
				<?php for ($i = date('Y'); $i >= 1900; $i--): ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<label>Descripción</label>
		<div class="form-group">
			<textarea cols="50" rows="10" name="description"></textarea>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="terminos" value="1" <?php echo(isset($_POST['terminos']) ? 'checked="checked"' : '') ?>> Acepto los Términos y condiciones
			</label>
		</div>
		<div class="form-group">
			<label for="avatar">Avatar</label>
			<input type="file" name="avatar" class="form-control" id="avatar" />
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Registrarme</button>
		</div>
	</form>

<?php echo pageFooter(); ?>
<?php echo htmlClose(); ?>
