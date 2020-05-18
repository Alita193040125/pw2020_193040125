<?php
$r1 = 7;
$r2 = 6;

$luas1 = hitunglingkaran1 ($r1);
$luas2 = hitunglingkaran ($r2);

function hitunglingkaran1($r)
{
	$luas = 3.14*$r*$r;
	return $luas;
}


function tambahluas2lingkaran($luas1, $luas2)
{
	$total_luas = $luas1+$luas2;
	return $total_luas;
}

echo "Total luas = " .tambahluas2lingkaran ($luas1, $luas2);

?>