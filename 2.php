<html>
<head>
	<title>Soal Kedua</title>
</head>
<body>
	<form method="post"> 
		<input type="submit" name="Submit2" value="GENERATE">
	</form>
	<?php
$bulan =  date("m");
$tgl =  date("d");
$wew = a(7).$tgl.a(5).$bulan;
	if (isset($_POST['Submit2'])) {
		echo "$wew";
		}


function a($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
</body>
</html>