<!DOCTYPE html>
<html>
<head>
	<title>latihan 4b</title>
</head>
<body>
	<h3>Daftar Pemain bola terkenal</h3>
		<?php
$Pemain = array();
$Pemain[] ="Mohammad Salah";
$Pemain[]="Cristiano Ronaldo";
$Pemain[]= "Lionel Messi";
$Pemain[]="Zlatan Ibrahim"; 
$Pemain[]="Neymar";


?>
 <ol>
 	<?php 
 	foreach ($Pemain as $Daftar) {
 	 	echo "<li>$Daftar</li>";
 	 } 
 		
 	 ?>
 </ol>
<h3>Daftar pemain bola terkenal baru</h3>
<?php
$nama = array_push($Pemain, "Luca Modric", "Sadio Mane");
?>
<ol>
 	<?php 
 	$bola = sort($Pemain);
 	foreach ($Pemain as $nama) {
 	 	
 		echo "<li>$nama</li>";
 	}
 	?>
	
</body>
</html>
