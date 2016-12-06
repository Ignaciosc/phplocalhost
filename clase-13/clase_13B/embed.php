<?php
	$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Digital House';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: dimgray">
	  <h1>Hello, <?php echo $nombre; ?>!</h1>

	  <?php
	  if(date('d') == 13){
		echo '<h2>Hoy es 13</h2>';
	  }?>

	  <?php	if(date('d') == 13){?>
		<h2>Hoy es 13</h2>
	  <?php } ?>

	  <?php	if(date('d') == 13):?>
		<h2>Hoy es 13</h2>
	  <?php endif; ?>

		<?php for($i = 0; $i < 10; $i++):?>
			<input type="text" name="input_<?php echo $i ?>" value="<?php echo $i ?>" />
			<input type="checkbox" name="check[]" value="<?php echo $i ?>" <?php if($i % 2 == 0){ ?> checked="checked" <?php } ?> />
		<?php endfor; ?>

		<?php $meses = [
			1 => "Enero",
			2 => "Febrero",
			3 => "Marzo",
			9 => "Septiembre",
			4 => "Abril",
		]; ?>
	  <select name="mes">
	  <?php foreach($meses as $numero => $nombre) { ?>
		  <option value="<?php echo $numero; ?>" <?php if(date('m') == $numero){ ?> selected="selected" <?php } ?>><?php echo $nombre; ?></option>
	  <?php } ?>
	  </select>





	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>