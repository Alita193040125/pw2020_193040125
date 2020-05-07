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
?>
