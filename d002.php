<html>
<head>
<title>PHP Ders</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

</head>
<body>
<h1 style="color:red"><?php echo "Merhaba \"Bilg. Muh\"<br>";?></h1>

<?php 
$a=12;
$b=7;
$c=13;
$d=++$c%--$b+$a--*$b++;
echo "a=$a  b=$b c=$c d=$d <br>";


$x=10; $y=5;
$z=++$x %4 * $y--;
print("x=$x  y=$y  z=$z<br>");
$x=10; $y=5; $z=3; 
$z*=++$x*$z--%$x+$z++;
print("x=$x  y=$y  z=$z<br>");

$x=10; $y=5; $z=3; 
$z+=($x++%$z)? $x*$y : --$y+$z;
print("x=$x  y=$y  z=$z<br>");

$x=10; $y=5; $z=3;
$z=($y--*++$z%$x--)?$x*$y:($x%($y+$z))?$x*($y+$z):$x%--$y;
print("x=$x  y=$y  z=$z<br>");


$x=10; $y=5; $z=3;
echo gettype($x);
echo gettype($y);

$t=$x/$z;
settype($t,"integer");
echo gettype($t);
echo "x/z=".$t. "<br>";

$x=14; $y=5; $z=3;
$z=!($x||$y)*$y;
echo "z=$z <br>";
echo gettype($z)."<br>";

$x=14; $y=5; $z=3;
settype($x,"integer");
settype($y,"integer");
$z=!($x|$y)*$y;
echo "z=$z <br>";
echo gettype($z)."<br>";

?>

</body>
</html>