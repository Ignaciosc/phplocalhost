<?php
    require_once('html.php');
    session_start();
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
    }
    echo htmlOpen('');
?>
<?php
    echo pageHeader('');
 ?>

<form class="" action="mostrar.php" method="post">
    <label for="name">Name</label>
    <input type="number" name="name" value="<?php echo $_SESSION['contador']?>">
    <input type="submit" name="reiniciar" value="reiniciar">
    <input type="submit" name="incrementar" value="incrementar">
</form>
<?php
    echo pageFooter('');
    echo htmlClose();
 ?>
<!-- 1. Crear dos archivos. mostrar.php y modificar.php
a. mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
b. modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
debe incrementar su valor en 1. Probar las modificaciones en mostrar.php.  -->
