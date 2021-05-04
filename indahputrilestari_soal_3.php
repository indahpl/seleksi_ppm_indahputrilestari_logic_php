<!DOCTYPE html>
<html>
<head>
	<title>Indah Soal 3</title>
</head>
<body>
<?php
$tokoke1 = 10000;
$tokoke68 = 30100;
$selisih_toko = 68-1;
echo "selisih toko = ";
echo $selisih_toko;

$selisih_biaya = $tokoke68-$tokoke1;
echo "<br>selisih biaya = ";
echo $selisih_biaya;

$biaya_per_step = $selisih_biaya/$selisih_toko ;
echo "<br>biaya per step = ";
echo $biaya_per_step;

$toko81 = $biaya_per_step * 81+$tokoke1;
echo "<br>biaya toko ke 81 = ";
echo $toko81;

?>  
</body>
</html>