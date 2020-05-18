<?php

echo "ini adalah tampilan hasil";
echo "<hr>";  

//fungsi
function hasil($angka1,$angka2){
	$hasil = $angka1+$angka2;
	return $hasil;

}

//eksekusi
$angka1 = $_GET['angka1'];
$angka2 = $_GET['angka2'];
echo hasil($angka1,$angka2);

?>