<?php
require_once('requires.php');

$errores = [];
if ($_POST)
{
	$errores = validarLogin($_POST);
	if(!count($errores))
	{
		$errores = loguearUsuario($_POST);
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
	<form class="container" method="post" action="">
		<div class="form-group <?php echo (isset($errores['email']) ? 'has-error' : '') ?>">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" name="email" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : '') ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="checkbox">
		    <label>
			    <input type="checkbox" name="recordarme" value="1"> Recordarme
		    </label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Login</button>
		</div>
	</form>

<?php echo pageFooter(); ?>
<?php echo htmlClose(); ?>