<html>
<head>
<title>PHP Ders</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>
<body>
<h1 style="color:red"><?php echo "Merhaba \"Bilg. Muh\"<br>";?></h1>

<?php 
/* Bir iscinin günlük çalisma saati ve saat ücreti girildikten sonra iscinin aylik gelirini (22 gün)
, bu gelire göre asagidak kosullara göre vergi miktarini, ve net maasini hesapalayan programi yazin.
Eger gelir 1000 küçükse vergi %5
	 gelir 1000 den büyük ve 3000 den küçükse vergi %10
	 gelir 3000 den büyük ve 5000 den küçükse vergi %15
	 gelir 5000 den büyükse vergi %20
	 GCS=8
	 S_Ucret=15
	 Gelir=GCSxS_Ucretix22
	 maas=gelir-vergi
	 
*/ 
$GCS=8;
$S_Ucret=20;
$gelir=$GCS*$S_Ucret*22;
print("GELIR=$gelir \t ");
switch ($gelir){
	case ($gelir>=0 && $gelir<1000):
		$vergi=$gelir*0.05;
		break;
	case ($gelir>=1000 && $gelir<3000):
		$vergi=$gelir*0.10;
		break;
	case ($gelir>=3000 && $gelir<5000):
		$vergi=$gelir*0.15;
		break;
	case ($gelir>=5000 ):
		$vergi=$gelir*0.20;
		break;
}

/* if($gelir<1000 && $gelir>0) $vergi=$gelir*0.05;
else if($gelir<3000) $vergi=$gelir*0.1;
else if($gelir<5000) $vergi=$gelir*0.15;
else $vergi =$gelir*0.2; */
//$vergi=($gelir<1000)? $gelir*0.05: ($gelir<3000)? $gelir*0.1: ($gelir<5000)? $gelir*0.15: $gelir*0.2;
$maas=$gelir-$vergi;
print("VERGI=$vergi \t MAAS=$maas <br>");


$renk="sari";
switch($renk){
	case "kirmizi":
		$color="#FF0000";
		break;
	case "mavi":
		$color="#0000FF";
		break;
	case "yesil":
		$color="#00FF00";
		break;
	case "sari":
		$color="#FFFF00";
		break;
	default:
		$color="#FF4786";
		break;
}
echo "<h2 style=\"color:$color\">MERHABA SINIF</h1><br>";


?>
<form action="" method="post">
<p>Adi:<input type="text" name="ad" value="Adini gir"></p>
<p>Vize:<input type="text" name="vize"></p>
<p>Final:<input type="text" name="final"></p>
<p align="center"><input type="submit" value="Gonder"></p>
</form>

<?php 
	$adi=$_POST["ad"];
	$v=$_POST["vize"];
	$f=$_POST["final"];
	$ort=0.4*$v+0.6*$f;
	
	
	if($ort>=0 && $ort <45){
		$HN="FF";
	}else if($ort>=45 && $ort <60){
		$HN="CC";
	}else if($ort>=60 && $ort <80){
		$HN="BB";
	}else if($ort>=80 && $ort <100){
		$HN="AA";
	}else {
		echo "<h2 align=\"center\" style=\"color:#F00; font-family:'Comic Sans MS', cursive\">HATALI GIRIS</h2>"; 
	}
	if($HN=="AA") $color="#0F0";
	else if($HN=="BB") $color="#00F";
	else if($HN=="CC") $color="#FF0";
	else if($HN=="FF") $color="#F00";
?>
<h1 align="center" style="background-color:#CCC; color:<?php echo $color;?>; font-family:Verdana, Geneva, sans-serif; font-style:italic; font-size:36px"><? echo $HN;?></h1>
</body>
</html>