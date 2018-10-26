<!DOCTYPE html>
<html>
<head>
	<title>Program Alala</title>
</head>
<body>

<?php 
	
	$pwl=array("Toni"=>80,"Devi"=>90,"Nina"=>75,"Reza"=>60);
	$ai=array("Toni"=>60,"Devi"=>70,"Nina"=>95,"Reza"=>50);
	$sbd=array("Toni"=>75,"Devi"=>75,"Nina"=>80,"Reza"=>70);

	$avg_pwl =array_sum($pwl)/4;
	echo "Rata - rata PWL : " .$avg_pwl."<br>";

	$avg_ai =array_sum($ai)/4;
	echo "Rata - rata AI : " .$avg_ai."<br>";

	$avg_sbd =array_sum($sbd)/4;
	echo "Rata - rata SBD : " .$avg_sbd."<br><br><br>";



$avg = array_map(function () {
    return array_sum(func_get_args())/3;
}, $pwl, $ai, $sbd);


echo "Rata-rata nilai Toni : " .$avg[0]. "<br>";
echo "Rata-rata nilai Devi : " .$avg[1]. "<br>";
echo "Rata-rata nilai Nina : " .$avg[2]. "<br>";
echo "Rata-rata nilai Reza : " .$avg[3]. "<br>";


 ?>


</body>
</html>