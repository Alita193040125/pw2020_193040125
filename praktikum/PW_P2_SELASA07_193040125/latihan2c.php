<!DOCTYPE html>
<html>
<head>
	<title>latihan 3</title>
</head>
<body>
<style>
	.kotak1 {
			border: 1px solid black;
			width: 210px;
			padding-top: 10px;
			padding-left: 10px;


		}
		.lingkaran {
			border:1px solid black;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			margin-right: 10px;
			margin-bottom: 10px;
			text-align: center;
			line-height: 50px;
			float: left;
			background-color: salmon;
		}
		.clear{
			clear: both;
		}
</style>
<?php

$a= "1";
$b = "2";
$c = "3";

?>

<div class="kotak1">

	<div class="lingkaran">
		<?php echo $a
		?></div>
		<div class="clear"></div>
		
	

	<div class="lingkaran">
		<?php echo"$b"?></div>
		<div class="lingkaran">
		<?php echo"$b"?></div>
		<div class="clear"></div>
		


	<div class="lingkaran">
		<?php echo"$c"?></div>
		<div class="lingkaran">
		<?php echo"$c"?></div>
		<div class="lingkaran">
		<?php echo"$c"?></div>
		<div class="clear"></div>
		

</div>

</body>
</html>