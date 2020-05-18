<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
				.box {
	background-color: lightblue;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black ;
		}

		.box1{
		background-color: salmon;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	
			<?php
			for ($z=1; $z <=6 ; $z++) { 
			if ($z%2) {
				$x=1;
			while ( $x <= 6) {
				if ($x%2 ) {
				echo "<div class='box'> </div>";	
			}else{

			echo "<div class='box1'> </div>";
			}

			$x++;

			}
			echo "<div class='clear'></div>";
			}
			else{

		$x=1;
		while ( $x <= 6) {
			if ($x%2 ) {
			echo "<div class='box1'> </div>";	
		}else{

		echo "<div class='box'> </div>";
		}

		$x++;

		}
		echo "<div class='clear'></div>";
		}

}



	

?>

</body>
</html>