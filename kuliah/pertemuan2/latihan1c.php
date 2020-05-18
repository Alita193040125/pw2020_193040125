<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.kotak1{
		border: 1px solid black;
		width: 200px;
		padding-top: 15px;
		padding-left: 15px;
		padding-bottom: 10px;

	}

	.kotak2{
		border: 1px solid black;
		width: 50px;
		height: 50px;
		margin-right: 5px;
		margin-bottom: 5px;
		text-align: center;
		line-height: 50px;
		float: left;
	}

	.clear{
		clear: both;
	}
	
</style> 
</head>

<body>
	
	<?php
	$a="A";
	$b="B";
	$c="C";
	?>

<div class="kotak1">
	<div class="kotak2">
		<?php
		echo $a 
		?>
	</div>
	<div class="kotak2">
		<?php
		echo $a 
		?>
	</div>
	<div class="kotak2">
		<?php
		echo $a 
		?>
	</div>
	<div class="clear">
	</div>

	<div class="kotak2">
		<?php
		echo $b 
		?>
	</div><div class="kotak2">
		<?php
		echo $b 
		?>
	</div>
	<div class="clear">
	</div>
	<div class="kotak2">
		<?php
		echo $c 
		?>
	</div>
	<div class="clear">
	</div>

</div>
</body>
</html>
