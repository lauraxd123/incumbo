<?php
    session_start();
    $_SESSION["usuario"] ="";
    session_destroy();
    header("location:acount.php");
?>