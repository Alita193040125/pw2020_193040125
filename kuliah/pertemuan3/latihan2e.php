<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 2e</title>
		<style>
	.kotak {
		background-color: black;
		width: 30px;
		height: 30px;
		text-align: center;
		line-height: 30px;
		border: 1px solid;
		float: left;
		margin: 2px;
		color: black;

	}

	.kotak1 {
		width: 30px;
		height: 30px;
		text-align: center;
		line-height: 30px;
		border: 1px solid;
		float: left;
		margin: 2px;
		color: black;
	}

	.clear {
		clear: both;
	}
</style>
</head>
<body>


	<?php
	for ($a=1; $a<=5; $a++) { 
		if ($a%2) {
			$b=1;
		while ($b <= 5) {
			if ($b%2) {
			echo "<div class='kotak'> </div>";
		}else{

			echo "<div class='kotak1'> </div>";
		}


		$b++; 

		}
		echo "<div class='clear'></div>";
        
        }

        else{
        $b = 1;
        while ($b <=5) {
        	if ($b%2) {
        		echo "<div class='kotak1'></div>";
        	}else{

        		echo "<div class='kotak'></div>";
        	}


        	$b++;

        }
        echo "<div class= 'clear'></div>"; 
        }
    }
        ?>
</body>
</html>