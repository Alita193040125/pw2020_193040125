<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2e</title>
</head>
<body>
	<?php
	for ($a=1; $a<=5; $a++) { 
		if ($a%2) {
			$b=1;
			echo "<div class='box'> </div>";
		}else{

			echo "<div class='kotak1'> </div>";
		}


		$b++;
		echo "<div class='clear'></div>";
        
        else{
        $b = 1;
        while ($b <= 5) {
        	if ($b%2) {
        		echo "<div class='kotak1'></div>";
        	} else{
        		echo "<div class='kotak'></div>";
        	}
        	$b++;

        }
        echo "<div class= 'clear'></div>"; 
        } 
</body>
</html>