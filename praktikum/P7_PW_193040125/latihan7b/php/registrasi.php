<?php
require 'functions.php';

if(isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
alert('registrasi Berhasil');
document.location.href = 'login.php';
</script>";
	}else {
		echo "<script>
		alert('registrasi Gagal');
		</script>";
	}
}
?>

<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<body class="background_reg">

<form action="" method="post">
	<div class="kotak_login">
		<h3 class="tulisan_login">HALAMAN REGISTRASSI</h3>
		<hr>
	<table>
		<tr>
			<td><label for="username">Username</label></td>
			<td>:</td>
			<td><input type ="text" class="form_login" name="username"></td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td>:</td>
			<td><input type ="password" class="form_login" name="password"></td>
		</tr>
	</table>
	<br>
		<button type="submit" class="tombol_registrasi" name="register">REGISTER</button> <br>
		<a class="back" href="login.php">kembali ke halaman login</a>
	</form>
</div>
</body>
</html>