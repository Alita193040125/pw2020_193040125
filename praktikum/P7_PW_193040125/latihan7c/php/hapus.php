<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$no  = $_GET['no'];


if(hapus($no) > 0){
	echo "<script>
	alert('data berhasil dihapus!');
	document.location.href = 'admin.php';
	</script>";
	}else{
	echo "<script>
	alert('data gagal dihapus');
	document.location.href='admin.php';
	</script>";


}

?>