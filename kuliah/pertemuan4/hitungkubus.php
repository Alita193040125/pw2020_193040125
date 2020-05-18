<?php

function hitungluaskubus($sisi)
{
	$luas = $sisi*$sisi*6;
	return $luas;
}

function tambahluas2kubus($luas1, $luas2)
{
	$total_luas = $luas1+$luas2;
	return $total_luas; 
}

//kubus pertama
$sisi1 = 9;

//kubus kedua
$sisi2 = 4;

//luas ke 1
$luas_kb1 = hitungluaskubus($sisi1);
//$luas_kb1 = $sisi1*$sisi1*6;

//luas ke 2
$luas_kb2 = hitungluaskubus($sisi2);
//$luas_kb2 = $sisi2*$sisi2*6;

echo "Total luas = ".tambahluas2kubus ($luas_kb1,$luas_kb2);
/*$total_luas = $luas_kb1+$luas_kb2;
echo "Total Luas = " .$total_luas; 
*/


/*echo "Total luas =" .tambahluas2kubus (5,3); //bisa diambil dari $luas_kb1 atau mendifinisikan sendri
*/

//return setelah diproses dikembalikan dan terserah mau diapakan
//echo tidak harus dikembalikan 


?>