<?php
    session_start();
    session_destroy();
    unset($_SESSION["codigo"]);
    header("location: ../Home/html/home.php");
?>