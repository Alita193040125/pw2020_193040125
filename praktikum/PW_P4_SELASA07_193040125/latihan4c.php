<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Daftar pemain bola terkenal dan clubnya</h3>
		<table>
		<?php
$pemain = array();
$pemain["Cristiano Ronaldo"] ="Juventus";
$pemain["Lionel Mesi"]="Barcelona";
$pemain["Luca Modric"]="Real Madrid" ;
$pemain["Mohammad Salah"]="Liverpool"; 
$pemain["Neymar Jr"]="Paris Saint Germain";
$pemain["Sadio Mane"]="Liverpool";
$pemain["Zlatan Ibrahimovic"]="Ac Milan";

?>
 <ol>
 	<?php 
 	foreach ($pemain as $nama => $desk) {
 		echo "<tr><td><b>$nama</b></td><td>:</td><td>$desk</td></tr>";
 	}
 	 ?>
 </ol>


	
</table>
</body>
</html>
