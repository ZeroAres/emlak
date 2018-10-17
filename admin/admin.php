<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"/>
		<link rel="stylesheet" href="../css/css.css"/> 
	<!-- CSS -->
	 
	
</head>
<body class="thempOne">
	

  <section class="container-fluid"> 
	
	
	<article class="thisPanel col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
	
		<div class="panelContent col-xs-12 col-sm-8 col-md-8"> 
			<div class="contentPanel col-xs-12 col-sm-4 col-md-4 p0"> 
				<h2>Admin Panel</h2>
				<form action="admin.php" method="POST">
					<div class="formGr"> 
						<label>Kullanıcı Adı</label>
						<input type="text" id="kullaniciadi" name="kullaniciadi" autofocus required autocomplete="off" class="textCt"/>
					</div>
					<div class="formGr"> 
						<label>Şifre</label>
						<input type="password" name="sifre" id="sifre" required class="textCt"/>
					</div>
					<div class="formGr btnX"> 
					 	<button class="login">Giriş Yap</button>
						<!-- <button class="remb">Şifremi Unuttum?</button> -->
					</div>
					<div class="col-xs-12 p0 copyright"> 
						<p>Çağdaş Çelikel © Tüm Hakları Saklıdır</p>
					</div>
				</form>
			</div>
		</div>
	
	</article>
	
  </section>
	
	<!-- JS -->
		<script type="text/javascript" src="../js/jquery.js"></script> 
		<script type="text/javascript" src="../js/js.js"></script>
	<!-- JS -->
</body>
</html>
<?php 
	
    ob_start();
    session_start();

	include '../includes/connect.php';

	$kullanici_adi = $_POST["kullaniciadi"];
	$sifre = $_POST["sifre"];

	$sorgu = $db->prepare("SELECT * FROM admin WHERE kullanici_adi = :p_kullanici_adi");
	$sorgu->bindParam(":p_kullanici_adi", $kullanici_adi);
	$sorgu->execute();

	$sonuc = $sorgu->fetch();


	$kontrol_sifre = $sonuc["sifre"];

	if ($sifre == $kontrol_sifre) {
		
		$_SESSION["oturum"] = 1;

		header("Refresh:0 url=index.php");

	}else{
		header("Refresh:0 url=index.html");
		echo "gizle();";
		echo "<script type='text/javascript' src='../js/style.js'></script>";
	}

	ob_end_flush();

 ?>