<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!-- LOOP control -->
<body>
<form action="d004.php" method="post">
DEGER GIR:	<input type="text" name="deger" value="0" />
<input type="submit" value="GONDER" />
</form>
<?php
		
/* Formadan girilen bir sayıaya kadar olan sayılaradan 3 ün ve 5 katı olanlarının toplamını
bulan program */
$toplam =0;

$sayi=$_POST["deger"];
echo "SAYI=$sayi <br>";
/*
while($sayi>0){
	if($sayi%3==0 && $sayi%5==0){ 
		echo "$sayi<br>";
		$toplam+=$sayi;
	}
	$sayi--;
	
} */
for($i=0;$i<$sayi;$i++){
	if($i%3==0 && $i%5==0){
		echo "$i<br>";
		$toplam+=$i;	
	}	
}

echo "TOPLAM=$toplam <br>";
for($i=1;$i<$sayi;$i=$i<<1){
	echo $i."--";	
}
?>
</body>
</html>