<!DOCTYPE html>
<html>
<head>
	<title>Indah Soal 4</title>
</head>
<body>
<?php
for($bil = 1; $bil <= 10; $bil++){
    if( ($bil % 2) == 0){
        echo "$bil Adalah Bilangan Genap<br>";
    }else {
		echo "$bil Adalah Bilangan Ganjil<br>";
	}	
}
?>
</body>
</html>