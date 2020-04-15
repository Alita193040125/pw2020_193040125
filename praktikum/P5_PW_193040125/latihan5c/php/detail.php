<?php

if (!isset($_GET['no'])) {
	header("location : ../index.php");
	exit;
}
require 'functions.php';

$no = $_GET['no'];

$apparel = query("SELECT * FROM apparel WHERE no = $no")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
<div class="foto">
	<img src="../assets/img/<?= $apparel["foto"]; ?>" alt="">
</div>
<div class="keterangan">
	<p><?= $apparel["nama Pakaian"]; ?></p>
	<p><?= $apparel["Bahan Pakaian"]; ?></p>
	<p><?= $apparel["merk"]; ?></p>
	<p><?= $apparel["harga"]; ?></p>
</div> 
<button class="tombol-kembali"><a href="../index.php">Kembali</button>
</body>
</html>