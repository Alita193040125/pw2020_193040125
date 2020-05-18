<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 2b</title>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th></th>
		<?php 
		for ($i=1; $i<=5; $i++){
			echo "<th> kolom $i </th>";
		}
		?>
	</tr>
<?php
$y=1;
while ( $y <= 5) { ?>
<tr>
<th>Baris<?= $y?></th>
<?php
		if ($y %2) {
				for ($z= 1; $z <= 5 ; $z++) { 
				echo "<td>Baris $y, kolom $z </td>";
				}

		} else {
			for ($z=1; $z <= 5 ; $z++) {
				echo "<td>&nbsp;</td>";
			}
			
		}

	echo "</tr>";
$y++;
}

?>
</table>
</body>
</html>