<?php 

	if ($_SESSION["oturum"] != 1) {
		header("Location: index.php");
	}else{

	$islem = $_GET["islem"];

	if ($islem == "kontrol") {

			$il = $_POST["il"];
			$ilce = $_POST["ilce"];
			$oncelik = $_POST["oncelik"];
			$indirim = $_POST["indirim"];
			$isinma = $_POST["isinma"];
			$esyadurumu = $_POST["esyadurumu"];
			$mulkdurumu = $_POST["mulkdurumu"];
			$metrekare = $_POST["metrekare"];
			$binayasi = $_POST["binayasi"];
			$katsayisi = $_POST["katsayisi"];
			$bulundugukat = $_POST["bulundugukat"];
			$aciklama = $_POST["aciklama"];
			$ucret = $_POST["ucret"];

		$sorgu = $db->prepare("INSERT INTO ev (il, ilce, indirim, metrekare, bina_yasi, isinma, kat_sayisi, bulundugu_kat, esya_durumu, aciklama, ucret) VALUES (:p_il, :p_ilce, :p_indirim, :p_metrekare, :p_bina_yasi, :p_isinma, :p_kat_sayisi, :p_bulundugu_kat, :p_esya_durumu, :p_aciklama, :p_ucret)");
		$sorgu->bindParam(":p_il", $il);
		$sorgu->bindParam(":p_ilce", $ilce);
		$sorgu->bindParam(":p_indirim", $indirim);
		$sorgu->bindParam(":p_metrekare", $metrekare);
		$sorgu->bindParam(":p_bina_yasi", $binayasi);
		$sorgu->bindParam(":p_isinma", $isinma);
		$sorgu->bindParam(":p_kat_sayisi", $katsayisi);
		$sorgu->bindParam(":p_bulundugu_kat", $bulundugukat);
		$sorgu->bindParam(":p_esya_durumu", $esyadurumu);
		$sorgu->bindParam(":p_aciklama", $aciklama);
		$sorgu->bindParam(":p_ucret", $ucret);
		$sorgu->execute();
	}

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div class="container">
		<div class="row">
	<div class="col-sm-3">
		<form action="index.php?sayfa=ev-ekle&islem=kontrol" method="post">
			<select class="form-control yerlestirme" name="il">
			    <option value="none" selected="" disabled="">İl</option>
			    <option value="1">Adana</option>
			    <option value="2">Adıyaman</option>
			    <option value="3">Afyonkarahisar</option>
			    <option value="4">Ağrı</option>
			    <option value="5">Amasya</option>
			    <option value="6">Ankara</option>
			    <option value="7">Antalya</option>
			    <option value="8">Artvin</option>
			    <option value="9">Aydın</option>
			    <option value="10">Balıkesir</option>
			    <option value="11">Bilecik</option>
			    <option value="12">Bingöl</option>
			    <option value="13">Bitlis</option>
			    <option value="14">Bolu</option>
			    <option value="15">Burdur</option>
			    <option value="16">Bursa</option>
			    <option value="17">Çanakkale</option>
			    <option value="18">Çankırı</option>
			    <option value="19">Çorum</option>
			    <option value="20">Denizli</option>
			    <option value="21">Diyarbakır</option>
			    <option value="22">Edirne</option>
			    <option value="23">Elazığ</option>
			    <option value="24">Erzincan</option>
			    <option value="25">Erzurum</option>
			    <option value="26">Eskişehir</option>
			    <option value="27">Gaziantep</option>
			    <option value="28">Giresun</option>
			    <option value="29">Gümüşhane</option>
			    <option value="30">Hakkâri</option>
			    <option value="31">Hatay</option>
			    <option value="32">Isparta</option>
			    <option value="33">Mersin</option>
			    <option value="34">İstanbul</option>
			    <option value="35">İzmir</option>
			    <option value="36">Kars</option>
			    <option value="37">Kastamonu</option>
			    <option value="38">Kayseri</option>
			    <option value="39">Kırklareli</option>
			    <option value="40">Kırşehir</option>
			    <option value="41">Kocaeli</option>
			    <option value="42">Konya</option>
			    <option value="43">Kütahya</option>
			    <option value="44">Malatya</option>
			    <option value="45">Manisa</option>
			    <option value="46">Kahramanmaraş</option>
			    <option value="47">Mardin</option>
			    <option value="48">Muğla</option>
			    <option value="49">Muş</option>
			    <option value="50">Nevşehir</option>
			    <option value="51">Niğde</option>
			    <option value="52">Ordu</option>
			    <option value="53">Rize</option>
			    <option value="54">Sakarya</option>
			    <option value="55">Samsun</option>
			    <option value="56">Siirt</option>
			    <option value="57">Sinop</option>
			    <option value="58">Sivas</option>
			    <option value="59">Tekirdağ</option>
			    <option value="60">Tokat</option>
			    <option value="61">Trabzon</option>
			    <option value="62">Tunceli</option>
			    <option value="63">Şanlıurfa</option>
			    <option value="64">Uşak</option>
			    <option value="65">Van</option>
			    <option value="66">Yozgat</option>
			    <option value="67">Zonguldak</option>
			    <option value="68">Aksaray</option>
			    <option value="69">Bayburt</option>
			    <option value="70">Karaman</option>
			    <option value="71">Kırıkkale</option>
			    <option value="72">Batman</option>
			    <option value="73">Şırnak</option>
			    <option value="74">Bartın</option>
			    <option value="75">Ardahan</option>
			    <option value="76">Iğdır</option>
			    <option value="77">Yalova</option>
			    <option value="78">Karabük</option>
			    <option value="79">Kilis</option>
			    <option value="80">Osmaniye</option>
			    <option value="81">Düzce</option>
			</select>
		</div>
	</div>


	<!-- Yer -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="ilce">
		 		<option value="none" selected="" disabled="">İlce</option>
				<option value="merkez">Merkez</option>
   			 	<option value="pamukkale">Pamukkale</option>
			</select>
	</div>

	<!-- Durum -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="oncelik">
		 		<option value="none" selected="" disabled="">Öncelik Durumu</option>
				<option value="1">Öne Çıksın</option>
   			 	<option value="0">Çıkmasın</option>
			</select>
	</div>

	<!-- İndirim yapılabilir mi -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="indirim">
		 		<option value="none" selected="" disabled="">İndirim yapılabilir mi ?</option>
				<option value="Evet">Evet</option>
   			 	<option value="Hayir">Hayır</option>
			</select>
	</div>

    <!-- Isınma -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="isinma">
		 		<option value="none" selected="" disabled="">Isınma Türü</option>
				<option value="Kombi">Kombi</option>
   			 	<option value="Soba">Soba</option>
			</select>
	</div>

	<!-- Eşya Durumu -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="esyadurumu">
		 		<option value="none" selected="" disabled="">Eşya Durumu</option>
				<option value="Esyali">Eşyalı</option>
   			 	<option value="Esyasiz">Eşyasız</option>
			</select>
	</div>

	<!-- Mülk Durumu -->

	<div class="col-sm-3">
			<select class="form-control formverisi" name="mulkdurumu">
		 		<option value="none" selected="" disabled="">Mülk Durumu</option>
				<option value="Kiralık">Kiralık</option>
   			 	<option value="Satilik">Satilik</option>
			</select>
	</div>
</div>

	<div class="sayilar">

	<!-- MetreKare -->

    <div class="form-group col-sm-2 formverisi-number">
      <input type="number" placeholder="MetreKare" class="form-control" name="metrekare" id="metrekare">
    </div>

	<!-- Bina Yaşı -->

    <div class="form-group col-sm-2 formverisi-number">
      <input type="number" placeholder="Bina Yaşı" class="form-control" name="binayasi" id="binayasi">
    </div>

	<!-- Kat Sayısı -->

    <div class="form-group col-sm-2 formverisi-number">
      <input type="number" placeholder="Kat Sayısı" class="form-control" name="katsayisi" id="katsayisi">
    </div>

	<!-- Bunuduğu Kat Sayısı -->

    <div class="form-group col-sm-2 formverisi-number">
      <input type="number" placeholder="Bulunduğu Kat Sayısı" class="form-control" name="bulundugukat" id="bulundugukat">
    </div>

    <!-- Ücret -->

    <div class="form-group col-sm-2 formverisi-number">
      <input type="number" placeholder="Ücret" class="form-control" name="ucret" id="ucret">
    </div>

    <div class="form-group col-sm-2 formverisi-number">
    	<textarea name="aciklama">Açıklama</textarea>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 200px; margin-top: 20px;">Sonraki Adım</button>
</div>
	

		</form>
</body>
</html