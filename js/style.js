function shrscm() {

	var url = 'http://localhost/Bootstrap/kontrol.php';
	var isteksecim = $("#isteksecim").val();
	var istek = {
	};

	$.ajax({
	  type: "POST",
	  url: url,
	  data: istek,
	  success: function(data){

	  		console.log(data);

	  }
	});

	document.getElementById("mulk-gizle").classList.remove('gizle');
	document.getElementById("spinner").classList.add('spinner');
}

function mulk_secim_click(){
	document.getElementById("spinner").classList.remove('spinner');
}

function mulksecim() {

	var url2 = 'http://localhost/Bootstrap/kontrol.php';
	
	var mulksecim = $("#mulksecim").val();


	var istek2 = {
	};

	$.ajax({
	  type: "POST",
	  url: url2,
	  data: istek2,
	  success: function(data){

	  		console.log(data);

	  }
	});

	document.getElementById("ilgileniyorsun_gizle").classList.remove('gizle');
	document.getElementById("spin_ner").classList.add('spinner');
}

function istek_click(){
	document.getElementById("spin_ner").classList.remove('spinner');
}

function yersecim() {

	var url3 = 'http://localhost/Bootstrap/kontrol.php';
	var yersecim = $("#yersecim").val();
	var istek3 = {
	};

	$.ajax({
	  type: "POST",
	  url: url3,
	  data: istek3,
	  success: function(data){

	  		console.log(data);

	  }
	});

	myVar = setTimeout(myFunction, 500);
}

function myFunction() {
	document.getElementById("araniyor").classList.add('m-loader');
	$("#araniyor").html("Aranıyor...");
}
function bekle(){
    window.location = "listele.php"
}
function kontrol(){
	document.getElementById("kontrol").classList.remove('bilgi');
}
function getir() {
	$("#altbaslik").slideDown();
}
function getiriki() {
	$("#altbaslik2").slideDown();	
}
function getiruc() {
	$("#altbaslik3").slideDown();	
}
function yetkilimenu() {
	$("#yetkili").slideDown();	
}
function toplagotur(){
	$("#altbaslik").slideUp(0);
	$("#altbaslik2").slideUp(0);
	$("#altbaslik3").slideUp(0);
	$("#yetkili").slideUp(0);
}