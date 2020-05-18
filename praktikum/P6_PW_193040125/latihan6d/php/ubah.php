<?php
require 'functions.php';
$no= $_GET['no'];
$aprl= query("SELECT * FROM apparel WHERE no = $no")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('data berhasil diubah !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal diubah!');
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
<body bgcolor="salmon">
<h3>Form Ubah data apparel</h3>
<form action="" method="post">
	<ul>

		
			<input type="hidden" name="no" id="no" value="<?= $aprl['no'];?>"><br><br>
		
		<li>
			<label for ="foto">foto</label><br>
			<input type="text" name="foto" id="foto" required value="<?= $aprl['foto']; ?>"><br><br>
		</li>
		<li>
			<label for ="nama_Pakaian">nama Pakaian</label><br>
			<input type="text" name="nama_Pakaian" id="nama_Pakaian" required value="<?= $aprl['nama_Pakaian']; ?>"><br><br>
		</li>
		<li>
			<label for ="Bahan_Pakaian">Bahan Pakaian</label><br>
			<input type="text" name="Bahan_Pakaian" id="Bahan_Pakaian" required value="<?= $aprl['Bahan_Pakaian']; ?>"><br><br>
		</li>
<li>
			<label for ="merk">merk</label><br>
			<input type="text" name="merk" id="merk" required value="<?= $aprl['merk']; ?>"><br><br>
		</li>

		<li>
			<label for ="harga">harga</label><br>
			<input type="text" name="harga" id="harga" required value="<?= $aprl['harga']; ?>"><br><br>
		</li>


		<br>
		<button type="submit" name="ubah">ubah data</button>

			
		<button type="submit">
			<a href="../index.php" style="text-decoration: none; color: black;">kembali</a>
		</button>
	</ul>
</body>
</html>
