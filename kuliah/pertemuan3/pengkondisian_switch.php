<?php  

$hari = 2;

if ($hari == 1) {
	echo "Hari Minggu | dari IF";
}elseif ($hari == 2) {
	echo "Hari Senin | Dari IF";
}

echo "<br>";

switch ($hari) {
	case 1:
		echo "Hari Minggu | dari switch";
		break;
	
	default:
		echo "Hari Tidak Dikenal";
		break;
}







?>