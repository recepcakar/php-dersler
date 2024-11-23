<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <style type="text/css" >
  th { text-align:left; background-color: #999; }      th, td { padding: 0.4em; }      tr.alt td { background: #88e; }     < /style > 
</style>
<body>
<h2> Fibonacci sequence </h2>
<table  border="1">
<tr><th> Sequence # </th><th> Value </th> </tr>
<tr><td> F <sub> 0 </sub> </td><td> 0 </td></tr>
<tr class="alt"><td> F <sub> 1 </sub> </td><td> 1 </td></tr>

<?php
	
	for($x=1;!($x&256);$x=$x<<1){
		 
		if($x==10){
			
			continue;
			echo "x 10 oldu";	}
		echo $x."<br>";
	}
		$y=21;
		$z=$y>>3;
		echo $z."<br>";
	echo "devam<br>";
	
	$iterations = 10;
	$num1 = 0;
	$num2 = 1;
	for ( $i=2; $i <= $iterations; $i++ ){
		$sum = $num1 + $num2;
		$num1 = $num2;
		$num2 = $sum;
?>
<tr <?php if($i%2 != 0 ) echo 'class="alt"' ?> >
<td> F <sub> <?php echo $i?> </sub> </td>
<td> <?php echo $num2?> </td>
</tr>
<?php
}
?>
</table >
</body >
</html >

