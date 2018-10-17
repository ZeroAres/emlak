	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
  </head>
  <body onload="toplagotur();">
<?php

	    ob_start();
    session_start();

	$oturum = $_SESSION["oturum"];

if ($oturum == 1) {


				$sayfa = $_GET['sayfa'];

				switch ($sayfa) {

					case 'ev-ekle':
						include('ev-ekle.php');
						break;
	}

?>

	<div class="col-sm-12" id="solkose"><p class="logoyazi">Kontrol Paneli</p></div>
	<div class="col-sm-12" id="kose">
		<div class="row">
		<div>
			<!--<ul class="baslik" onclick="ackapa();">Eklemeler</ul>-->
				
				<button type="button" class="btn btn-outline-success baslik" onclick="getir()">Ekle</button>
			<div id="altbaslik">
				<a href="index.php?sayfa=ev-ekle" class="altbaslik">Ev ilanı</a>
				<a href="#" class="altbaslik">Arsa ilanı</a>
				<a href="#" class="altbaslik">İşyeri ilanı</a>
			</div>
			
				<button type="button" class="btn btn-outline-success baslik" onclick="getiriki()">Düzenle</button>
			<div id="altbaslik2">
				<a href="#" class="altbaslik">Ev ilanı</a>
				<a href="#" class="altbaslik">Arsa ilanı</a>
				<a href="#" class="altbaslik">İşyeri ilanı</a>
			</div>
			
				<button type="button" class="btn btn-outline-success baslik" onclick="getiruc()">Sil</button>
			<div id="altbaslik3">
				<a href="#" class="altbaslik">Ev ilanı</a>
				<a href="#" class="altbaslik">Arsa ilanı</a>
				<a href="#" class="altbaslik">İşyeri ilanı</a>
			</div>
			
				
				<button type="button" class="btn btn-outline-danger yetkili" onclick="yetkilimenu();">Yetkili İşlemleri</button>
			<div id="yetkili">
				<a href="#" class="altbaslikyetkili">Yetkili Ekle</a>
				<a href="#" class="altbaslikyetkili">Yetkili Sil</a>
				<a href="#" class="altbaslikyetkili">Kullanıcı Sil</a>
			</div>

			<button type="button" class="btn btn-outline-info gorunumudegistir">Görünümü Değiştir</button>
			<div id="altbosluk">
		</div>
		</div>
	</div>
</div>

	<!-- Son değişiklikler yap -->








    

    <!-- Bootstrap JS -->
    <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/style.js"></script>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>


	
<?php  
 }else{
 	echo "Yetkin yok";
 } 

 	ob_end_flush();

 ?>
</body>
</html>