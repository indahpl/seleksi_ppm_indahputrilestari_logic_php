<!DOCTYPE html>
<html>
<head>
	<title>Indah Soal 1</title>
</head>
<body>
<?php
$bolpoin = 1750;
$lusin = 12;
$total_belanja = $bolpoin*$lusin;
echo "total belanja = ";
echo $total_belanja;

$jumlah_lembar = 5;
$nilai_per_lembar = 5000;
$total_uang = $jumlah_lembar*$nilai_per_lembar;
echo "<br>total uang = ";
echo $total_uang;

$sisa = $total_uang - $total_belanja;
echo "<br>sisa bembelian = ";
echo $sisa;

?>  
</body>
</html>