<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('data berhasil ditambahkan !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal ditambahkan!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body bgcolor="lightblue">
<h3>Form Tambah data apparel</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for ="foto">foto</label><br>
			<input type="text" name="foto" id="foto" required><br><br>
		</li>
		<li>
			<label for ="nama_Pakaian">nama Pakaian</label><br>
			<input type="text" name="nama_Pakaian" id="nama_Pakaian" required><br><br>
		</li>
		<li>
			<label for ="Bahan_Pakaian">Bahan Pakaian</label><br>
			<input type="text" name="Bahan_Pakaian" id="Bahan_Pakaian" required><br><br>
		</li>
<li>
			<label for ="merk">merk</label><br>
			<input type="text" name="merk" id="merk" required><br><br>
		</li>

		<li>
			<label for ="harga">harga</label><br>
			<input type="text" name="harga" id="harga" required><br><br>
		</li>


		<br>
		<button type="submit" name="tambah">tambah</button>
			
		<button type="submit">
			<a href="../index.php" style="text-decoration: none; color: black;">kembali</a>
		</button>
	</ul>
</body>
</html>