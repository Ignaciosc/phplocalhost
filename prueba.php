<?php
    session_start();
    if (!isset($_SESSION['rand'])) {
        $_SESSION['rand'] = mt_rand();
    }
    echo $_SESSION['rand'];
 ?>
