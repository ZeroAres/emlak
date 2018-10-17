<?php

    ob_start();
    session_start();

    // Formdan gelen Verileri Al

    $sehirsecim = $_POST["sehirsecim"];
    $_SESSION["sehirsecim"] = $sehirsecim;
    

    ob_end_flush();
?>