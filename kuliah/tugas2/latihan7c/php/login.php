<?php
session_start();
require 'functions.php';
//melakukan pengecekkan apakah user sudah melakukan login jika sudah redirect ke halaman admin 
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];



	//ambil username berdasarkan id
	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if ($hash === hash('sha256', $row['id'], false)){
	$_SESSION['username'] = $row['username'];
	header("Location: admin.php");
	exit;
}
}
//login
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
	//mencocokkan username dan pasword
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if(password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] =  hash('sha256', $row['id'], false);

			//jika remember me dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash , time() + 60 * 60 * 24);;
			}
		
		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
			die;
		}

		header("Location: ../index.php");
		die;
	}
}
	$error= true;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<body class="background">

	<div class="kotak_login">
		<h3 class="tulisan_login"> HALAMAN LOG IN</h3>
		<hr></hr><br>
<form action="" method="post">
	<?php if (isset($error)) : ?>
		<p style="color : red; font-style: italic;">Username atau password salah</p>
	<?php endif; ?>
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
	<div class="remember">
		<input type="checkbox" name="remember">
		<label for="remember">Remember me</label>
		</div>
		<button type="submit" class="tombol_login" name="submit">Login</button> 
		<div class="registrasi">
			<p>Belum punya akun ? registrasi <a href="registrasi.php">Disini</a></p>
		</div>
	</form>
</div>
</body>
</html>