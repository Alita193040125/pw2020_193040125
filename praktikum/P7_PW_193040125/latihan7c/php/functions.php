<?php
function koneksi() {
$conn = mysqli_connect("localhost","root","") or die("koneksi ke db gagal");
mysqli_select_db($conn, "pw_193040125") or die("database salah");


return $conn;
}
function query($sql){

$conn=koneksi();
$result = mysqli_query($conn , "$sql");

$rows = [];
while ($row =mysqli_fetch_assoc($result)) {
$rows[] = $row;
}
return $rows;
}


//fungsi untuk menambahkan data didalam database
function tambah($aprl)
{
	$conn = koneksi();
	$foto =htmlspecialchars($aprl['foto']);
	$nama =htmlspecialchars($aprl['nama_Pakaian']);
	$Bahan= htmlspecialchars($aprl['Bahan_Pakaian']);
	$merk =htmlspecialchars($aprl['merk']);
	$harga= htmlspecialchars($aprl['harga']);
	
	$query ="INSERT INTO apparel
	VALUES
	('','$foto','$nama','$Bahan','$merk','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function hapus($no)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM apparel WHERE no = $no");

	return mysqli_affected_rows($conn);
}
function ubah($aprl)
{
	$conn = koneksi();
	$no =htmlspecialchars($aprl['no']);
	$foto =htmlspecialchars($aprl['foto']);
	$nama =htmlspecialchars($aprl['nama_Pakaian']);
	$Bahan= htmlspecialchars($aprl['Bahan_Pakaian']);
	$merk =htmlspecialchars($aprl['merk']);
	$harga= htmlspecialchars($aprl['harga']);
	
	$query ="UPDATE apparel
	SET
	no ='$no',
	foto='$foto',
nama_Pakaian='$nama',
Bahan_Pakaian ='$Bahan',
merk='$merk',
harga='$harga'
WHERE no ='$no'";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data['password']);


	//cek username sudah ada atau belum
	$result =mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
alert('username sudah digunakan');
</script>";
return false;
	}
//encripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambah user baru
	$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
	mysqli_query($conn, $query_tambah);
	return mysqli_affected_rows($conn);

}
?>
