

<?php
require 'php/functions.php';
$apparel = query("SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="darksalmon">

  <div class="container">
  	<h1>DAFTAR APPAREL</h1>
 <?php foreach ($apparel as $aprl) : ?>
<p class="nama Pakaian">
<a href="php/detail.php?no=<?= $aprl['no'] ?>">
<?= $aprl["nama_Pakaian"] ?>
</a>
</p>

<?php endforeach; ?>
  
</div>

</body>
</html>

