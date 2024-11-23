<html>
<head>
<title>PHP Ders</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>
<body>
<? /*
$fiyat=15;
$adet=20;
$tutar=$fiyat*$adet;
switch($tutar){
	case 1000<=$tutar:
		$indirim=0.2*$tutar; break;
	case 500<=$tutar:
		$indirim=0.15*$tutar;break;
	case 100<=$tutar:
		$indirim=0.1*$tutar;break;
	case 100>$tutar:
		$indirim=0.05*$tutar;break;
	default:
		break;
	}
	$tutar=$tutar-$indirim;
	echo $tutar. "<br>";
	$dizi=array(array(23,6,19,2),array(4,12,25,8),array(10,18,1,14),array(11,24,7,20));
	function enbuyuk($d){
		$eb=$d[0][0];
		
		for($i=1;$i<4;$i++){
			for($j=1;$j<4;$j++){
				if($d[$i][$j]>$eb){
					$x=$i;
					$y=$j;
				}	
			}	
		}
		echo $x .",". $y." <br>";
	}
	enbuyuk($dizi);
	
	$ogrenciler = array (
	array ( adi => "onur", notu =>"74"),array( adi => "samet", notu =>"64"),array( adi => "can", notu =>"85"),
	array ( adi => "rasit", notu =>"100"),array( adi => "mert", notu =>"80"),array( adi => "aziz", notu =>"14"));
	foreach ( $ogrenciler as $ogrenci ) {
		foreach ( $ogrenci as $anahtar => $deger ) {
			print (" $deger = ");
		}
		print (",");
	}
	*/
?>

<form action="d001.php" method="post">
 <p>Yazar: <input type="text" name="isim" /></p>
 <p><input type="submit" /></p>
 
</form>
<?php
$yazar=$_POST["isim"];

$kitap = array (
	array ( kAdi => "The Hobbit", yAdi =>"Tolkain"),array( kAdi => "Burmase Days", yAdi =>"Orwel"),array( kAdi => "The Grapes of Wrath", yAdi =>"Steinbeck"), array( kAdi => "A Tale of Two Cities", yAdi =>"Dickens"),array( kAdi => "Paradise Lost", yAdi =>"Milton"));
		
		foreach ($kitap as $k){
			if(!strcmp($k[yAdi],$yazar))
			echo $k[kAdi]."<br>";		
		}
function BKI($b,$k){
	$ki=$k/($b*$b);
	if ($ki>=0 || $ki<=18){
		printf("Zayif\n");
	}else if($ki>18 && $ki<=26){
		printf("Normal\n");
	}else if($ki>26){
		printf("kilolu\n");
	} 
	
}
$boy=1.80;
$kilo=80;
BKI($boy,$kilo);


$dizi=array(array(3,5,4),array(2,8,7),array(9,6,1));
$iz=0;
for($i=0;$i<3;$i++){
	for($j=0;$j<3;$j++){
		if($i==$j) $iz+=$dizi[$i][$j];	
	}	
}
echo "--->".$iz."<br>";

$onot=64;
if($onot>0&&$onot<45){
	$hnot='F';
}else if($onot>=45&&$onot<60){
	$hnot='C';
}else if($onot>=60&&$onot<80){
	$hnot='B';
}else if($onot>=80&&$onot<100){
	$hnot='A';
}else {
	print("Hatali not\n");
}
echo $hnot;
?>

</body>
</html>