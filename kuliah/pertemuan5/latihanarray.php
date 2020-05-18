<?php
	

	//arah 1 dimensi
	$arah = array("Kanan", "Kiri");

	$arah[2] = "Atas";
	$arah[] = "Bawah"; //otomatis masuk ke 3


	$arah[1] = "Kanan";
	$arah[0] = "Kiri";


	print_r($arah);

	echo "</br>";
	echo "Panjang Array = " .count($arah);

	echo "</br>";

	for ($i=0; $i < count($arah) ; $i++) { 
		echo "Arah = ".$arah[$i];
		echo "</br>";
	}

	$i = 0;
	foreach ($arah as $namaarah) {
		echo $namaarah;
	}
	echo "</br>";
	//array multidimensi

	$mahasiswa = array();
	$mahasiswa[0][0] = "193040132";
	$mahasiswa[0][1] = "Marsha Yunita DPS";
	$mahasiswa[1][0] = "Bandung";
	$mahasiswa[1][1] = "+62 89667xxxxxx";

	print("<pre>" .print_r($mahasiswa, true). "</pre>");

	for ($i=0; $i < count($mahasiswa) ; $i++) {
		for ($j=0; $j < count($mahasiswa) ; $j++) { 
		
		}
	}
 




?>