<?php
require_once('requires.php');
?>

<?php echo htmlOpen('Home'); ?>
	<?php echo pageHeader('Home'); ?>
		<div class="jumbotron">
			<?php if(!isset($_SESSION[SESSION_USER_KEY])) {?>
				<h1>YO SOY EL INDEX!</h1>
			<?php } else { ?>
				<h1><?php echo $_SESSION[SESSION_USER_KEY]['email'] ?></h1>
				<p>
					<img src="/2016_2/uploads/avatars/<?php echo $_SESSION[SESSION_USER_KEY]['id']?>" alt="<?php echo $_SESSION[SESSION_USER_KEY]['nombre'] ?>" title="<?php echo $_SESSION[SESSION_USER_KEY]['nombre'] ?>" />
					<br/>
					<a href="download.php?id=<?php echo $_SESSION[SESSION_USER_KEY]['id']?>">Bajar Avatar</a></p>
			<?php } ?>
			<?php if(!isset($_SESSION[SESSION_USER_KEY])) {?>
				<p><a href="login.php">LOGIN</a></p>
				<p><a href="registracion.php">REGISTRACIÓN</a></p>
			<?php } else { ?>
				<p><a href="logout.php">LOGOUT</a></p>
			<?php } ?>
		</div>
<?php echo pageFooter(); ?>
<?php echo htmlClose(); ?>