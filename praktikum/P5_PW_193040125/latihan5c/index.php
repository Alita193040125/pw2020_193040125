<?php
require 'php/functions.php';
$apparel = query("SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container">
 <?php foreach ($apparel as $app) : ?>
<p class="nama Pakaian">
<a href="php/detail.php?no=<?= $app['no'] ?>">
<?= $app["nama Pakaian"] ?>
</a>
</p>
<?php endforeach; ?>
  
</div>

</body>
</html>

