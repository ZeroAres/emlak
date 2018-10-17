
<?php

    ob_start();
    session_start();

/*
	// DB e Bağlan
	include("../includes/connect.php");

	// DB'i Sorgu
	$sorgu = $db->prepare("SELECT * FROM :p_istek WHERE il = :p_il AND durum = :p_durum");
	$sorgu->bindParam(":p_il", $sehirsecim);
	$sorgu->bindParam(":p_istek", $isteksecim);
	$sorgu->bindParam(":p_durum", $mulksecim);
	$sorgu->execute();

	$liste = $sorgu->fetchAll();
*/

    // Formdan gelen Verileri Al

    $sehirsecim = $_POST["sehirsecim"];
    $mulksecim = $_POST["mulksecim"];
    $isteksecim = $_POST["isteksecim"];

    $_SESSION["sehirsecim"] = $sehirsecim;
    $_SESSION["mulksecim"] = $mulksecim;
    $_SESSION["isteksecim"] = $isteksecim;
    

    ob_end_flush();
?>
