<?php
function hitungluaskubus($sisi){
	$luas = $sisi*$sisi*6;
	return $luas;}
function tambahluas2kubus($luas1,$luas2)
{
$total_luas =$luas1+$luas2;
return $total_luas;
}
//kubus pertama
$sisi1 = 10;
//kubus kedua
$sisi2 = 2;
//luas ke 1
$luas_kubusa =hitungluaskubus($sisi1);
// $luas_kubusa = $sisi1*$sisi1*6;
//luas ke 2
$luas_kubusb =hitungluaskubus($sisi2);
// $luas_kubusb = $sisi2*$sisi2*6;
//fungsi tambah luas 2 kubus
// $total_luas =$luas_kb1+$luas_kb2;
// echo "total luas = ".$total_luas;



echo "total luas = ".tambahluas2kubus($luas_kubusa,$luas_kubusb);

?>