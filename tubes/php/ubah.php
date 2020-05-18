<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>
<body bgcolor="salmon">
<h3>Form Ubah data apparel</h3>

      <form action="" method="post" enctype="multipart/form-data">
     
	<ul>

		
			<input type="hidden" name="no" id="no" value="<?= $aprl['no'];?>"><br><br>
		
		<li>
<table class="highlight" style="color:Black">
		<tr>
			
			<td><h5>Foto</h5></td>
			<td>:</td>
			<td><input type="file" name="foto" id="foto" required value="<?= $aprl['foto']; ?>"></td>
		</tr>
	
		<tr>
			<td><h5>Nama Pakaian</h5></td>
			<td>:</td>
			<td><input type="text" name="nama_Pakaian" id="nama_Pakaian" required value="<?= $aprl['nama_Pakaian']; ?>"></td>
		</tr>
		<tr>
			<td><h5>Bahan Pakaian</h5></td>
			<td>:</td>
			<td><input type="text" name="Bahan_Pakaian" id="Bahan_Pakaian" required value="<?= $aprl['Bahan_Pakaian']; ?>"></td>
</tr>

<tr>
			<td><h5>merk</h5></td>
			<td>:</td>
			<td><input type="text" name="merk" id="merk" required value="<?= $aprl['merk']; ?>"></td>
		</tr>

		
		<tr>
			<td><h5>harga</h5></td>
			<td>:</td>
			<td><input type="text" name="harga" id="harga" required value="<?= $aprl['harga']; ?>"></td>

		

	
	</table>

		<br>
		<button class="waves-effect green darken-3 btn" type="submit" name="ubah">ubah data</button>

	
			<a class="waves-effect blue darken-4 btn" type="submit" href="adminpage.php" style="text-decoration: none; color: white;">kembali</a>
		
	</ul>
</body>
</html>
