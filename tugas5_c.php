<!DOCTYPE html>
<html>
<head>
	<title>5</title>
</head>
<body>
<form action="#" method="POST">
<input type="text" name="nama[]" /><br>
<input type="number" min="1" max="100" name="pwl[]" /><br>
<input type="number" min="1" max="100" name="ai[]" /><br>
<input type="number" min="1" max="100" name="sbd[]" /><br><br>

<input type="text" name="nama[]" /><br>
<input type="number" min="1" max="100" name="pwl[]" /><br>
<input type="number" min="1" max="100" name="ai[]" /><br>
<input type="number" min="1" max="100" name="sbd[]" /><br><br>

<input type="text" name="nama[]" /><br>
<input type="number" min="1" max="100" name="pwl[]" /><br>
<input type="number" min="1" max="100" name="ai[]" /><br>
<input type="number" min="1" max="100" name="sbd[]" /><br><br>
<input type="submit" name"submit" value="Submit"><br>

<?php 
if ($_POST) {
$nama = $_POST['nama'];
$pwl = $_POST['pwl'];
$ai = $_POST['ai'];
$sbd = $_POST['sbd'];


function show_Names($nama, $pwl, $ai, $sbd)
{
return("$nama, Nilai PWL= $pwl, Nilai AI= $ai, Nilai SBD= $sbd");
}

$c = array_map("show_Names", $nama, $pwl, $ai, $sbd);
print_r($c);
	asort($pwl);
	echo '<pre>';print_r($pwl);
	asort($ai);
	echo '<pre>';print_r($ai);
	asort($sbd);
	echo '<pre>';print_r($sbd);
	$avg_pwl =array_sum($pwl)/3;
	echo "Rata - rata PWL : " .$avg_pwl."<br>";

	$avg_ai =array_sum($ai)/3;
	echo "Rata - rata AI : " .$avg_ai."<br>";

	$avg_sbd =array_sum($sbd)/3;
	echo "Rata - rata SBD : " .$avg_sbd."<br><br><br>";

}
?>

</form>
</body>
</html>