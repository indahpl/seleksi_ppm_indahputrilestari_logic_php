<!DOCTYPE html>
<html>
<head>
	<title>Indah Soal 2</title>
</head>
<body>
<?php
$jumlah_sepuluhribu = 3*10000;
echo "total sepuluh ribu = ";
echo $jumlah_sepuluhribu;

$jumlah_limaribu = 4*5000;
echo "<br>total lima ribu = ";
echo $jumlah_limaribu;

$jumlah_duapuluhribu = 5*20000;
echo "<br>total dua puluh ribu = ";
echo $jumlah_duapuluhribu;

$jumlah_uang = $jumlah_sepuluhribu+$jumlah_limaribu+ $jumlah_duapuluhribu;
echo "<br>total uang = ";
echo $jumlah_uang;

$jumlah_belanja = 55000;
echo "<br>jumlah biaya belanja = ";
echo $jumlah_belanja;

$sisa = $jumlah_uang - $jumlah_belanja;
echo "<br>Sisa Pembelian = ";
echo $sisa;

?>  

</body>
</html>