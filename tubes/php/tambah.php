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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <title>Document</title>
</head>

<body background="../assets/img/y.jpeg">
  <div class="container grey">
    <center>
      <h3>Form Tambah Data Apparel</h3>
    </center>
  
      <form action="" method="post" enctype="multipart/form-data">
     
	<table class="striped" style="color:Black">
		<tr>
			
			<td><h5>Foto</h5></td>
			<td>:</td>
			<td><input type="file" name="foto" id="foto"></td>
		</tr>
	
		<tr>
			<td><h5>Nama Pakaian</h5></td>
			<td>:</td>
			<td><input type="text" name="nama_Pakaian" id="nama_Pakaian" required></td>
		</tr>
		<tr>
			<td><h5>Bahan Pakaian</h5></td>
			<td>:</td>
			<td><input type="text" name="Bahan_Pakaian" id="Bahan_Pakaian" required></td>
</tr>

<tr>
			<td><h5>merk</h5></td>
			<td>:</td>
			<td><input type="text" name="merk" id="merk" required></td>
		</tr>

		
		<tr>
			<td><h5>harga</h5></td>
			<td>:</td>
			<td><input type="text" name="harga" id="harga" required></td>

    </form>
    </table>
   <br><center>
      <button class="waves-effect green darken-3 btn" type="submit" name="tambah">Tambah data</button>

	
			<a class="waves-effect blue darken-4 btn" type="submit" href="adminpage.php" style="text-decoration: none; color: white;">kembali</a></center>
  
		

	
	
 </div>
  </div>

	
   

  <script type="text/javascript" src="../js/materialize.min.js"></script>

</body>
</html>