<?php

    ob_start();
    session_start();

    // Formdan gelen Verileri Al

    $mulksecim = $_POST["mulksecim"];
    $_SESSION["mulksecim"] = $mulksecim;
    

    ob_end_flush();
?>