<?php

    ob_start();
    session_start();

    $sehirsecim = $_SESSION["sehirsecim"];
    $mulksecim = $_SESSION["mulksecim"];
    $isteksecim = $_SESSION["isteksecim"];

    echo $sehirsecim;
    echo "<br>";
    echo $mulksecim;
    echo "<br>";
    echo $isteksecim;



    ob_end_flush();
?>