<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!-- LOOP control -->
<body>
<?php
	$metin="Bir string degiskenin degerinin ya da bir metnin tanimladigimiz bolumunu verir.";
	$secim=substr($metin,-6);
	echo "$secim <br>";
	$degisken = "\0 Olumsuz düşünce ve mekanizmalar üzerine olumlu şeyler bina edilemez!\n\r\t";
$secilen = trim ($degisken);
	echo "$secilen <br>";
	
	echo chr(65)."<br>";
	echo ord("A")."<br>";
	
	$sayi=65;
	printf("SAYI: %c .... %d .... %f .... %o .... %x <br>",$sayi,$sayi,$sayi,$sayi,$sayi);
	
	$sayfa=5;
	$degisken = " Fonksiyonlar " ;
	printf( "%'.-50.50s %3d<br>" , $degisken,$sayfa);
	
	$sayfa+=5;
	$degisken = " Diziler " ;
	printf( "%'--50.50s %3d<br>" , $degisken,$sayfa);
	
	$sayfa+=5;
	$degisken = " PHP sınıflar " ;
	printf( "%'+-50.50s %3d<br>" , $degisken,$sayfa);
	
	echo strlen($metin)."<br>";
	
	$sayi=123123456.789123;
	print "a.) ".number_format($sayi)."<br>";
	print "b.) ".number_format($sayi,1,".",",")."<br>";
	print "c.) ".number_format($sayi,3,".",",")."<br>";
	print "d.) ".number_format($sayi,2,",",".")."<br>";
	$sayi=123456789;
	print number_format($sayi,2,".",",");
	print("<br>");
	/*
	$tarih=getdate();
	print("($tarih[weekday])-$tarih[mday] / $tarih[mon] / $tarih[year]|| $tarih[hours]:$tarih[minutes]:$tarih[seconds]<br>");
	echo "Tarih: ".date("d-m-Y")."<br>";
	*/
	
	
	$isim="ahmet";
	$reg='/^[a-zA-Z\'][^0-9]/';
	if(preg_match($reg,$isim)){echo $isim." Uygun<br>";}else{echo $isim." Uygun degil<br>";}
	
	
	$email = "_1abc123sdsd.com"; 
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	if (preg_match($regex, $email)) {
 	echo $email . " Uygun bir mail adresi.";
	} else { 
 	echo $email . " Uygun olamayan bir mail adresi. Tekrar dene<br>";
	}           
	
	echo "========================<br>";
	$string = "This is a test";
	//echo str_replace(" is", " was", $string);
	
	//echo ereg_replace("( )is", "\\1was", $string);
	
	echo ereg_replace("(( )is)", "\\2was", $string);
	printf("<br>");
	
	
	$num = '5';
	$str = "Bu cumle bes kelimeden olusmaktadir.";
	$str = ereg_replace('bes', $num, $str);
	echo $str."<br>";  
	
	$formdan="<a href=\"Javascript:alert(\'HATA HATA\')\">Buraya tikla 100 milyon kazan</a>";
	//"<ul><li>bir</li><li>iki</li></ul>";
	
	echo $formdan."<br>";
	
	$formdan=ereg_replace("<|>","X",$formdan);
	echo $formdan."<br>";
	
	$metin = "İnsan sözüyle kendini gösterir, davranışlarıyla ruh halini aksettirir.";
	$aranan = " ";
	$yeni_dizi_değişken = split($aranan, $metin);
	foreach ($yeni_dizi_değişken as $eleman) {
		print "$eleman <br>";
	}

?>
</body>
</html>