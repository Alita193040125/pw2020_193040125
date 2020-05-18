<?php

//IF = untuk 1 kondisi

//$nilai = 51;

//if (($nilai%2) == 1)  
//{
//	echo "Ganjil";
//} 

//else {
//	echo "Genap";
//}

$warna_lampu = "hijau";

if ($warna_lampu == "Merah") {

  echo "Berhenti";
}

elseif ($warna_lampu == "Kuning") {
	echo "Bersiap";
} 

elseif (strtoupper($warna_lampu) == "HIJAU") { //untuk menyesuaikan huruf
	echo "Maju";
}
//penulisan huruf kap

else {
	echo "Maju";
}  //pengkondisian yang bukan kesemuanya

?>

