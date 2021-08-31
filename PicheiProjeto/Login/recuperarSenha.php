<?php

function paginaEsqueci()
{


    if (isset($_POST["btn_recover"])) {
        session_start();
        session_destroy();
        header("location: ../Home/html/recuperar.php");
    }
}
