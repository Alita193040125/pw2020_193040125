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
function uploud(){
	$nama_file = $_FILES['foto']['name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp_file =$_FILES['foto']['tmp_name'];



	//cek apakah tidak ada gambar yang diuploud
	if ($error == 4) {
		echo "<script>
alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
//cek apakah yang di uploud gambar
	$ekstensiFotoValid =['jpg','jpeg','png','webp'];
	$ekstensiFoto =explode('.', $nama_file);
	$ekstensiFoto = strtolower(end($ekstensiFoto));
	if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
		echo "<script>
alert('yang anda uploud bukan gambar');
		</script>";
		return false;
	}
//type
	if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg' && $tipe_file != 'image/webp'){
			echo "<script>
alert('yang anda pilih bukan gambar');
		</script>";
		return false;
	}


	//ukuran

	if($ukuran_file > 5000000){
		echo "<script>
alert('ukuran terlalu besar');
		</script>";
		return false;
	}
	//lolos 
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensiFoto;

	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
	return $nama_file_baru;

}







//fungsi untuk menambahkan data didalam database
function tambah($aprl)
{

	 $conn= koneksi();

	$nama =htmlspecialchars($aprl['nama_Pakaian']);
	$Bahan= htmlspecialchars($aprl['Bahan_Pakaian']);
	$merk =htmlspecialchars($aprl['merk']);
	$harga= htmlspecialchars($aprl['harga']);
	
	//UPLOUD GAMBAR
	$foto =uploud();
	if (!$foto) {
		return false;
	}


	$query ="INSERT INTO apparel
	VALUES
	(null,'$foto','$nama','$Bahan','$merk','$harga')";

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
	$nama =htmlspecialchars($aprl['nama_Pakaian']);
	$Bahan= htmlspecialchars($aprl['Bahan_Pakaian']);
	$merk =htmlspecialchars($aprl['merk']);
	$harga= htmlspecialchars($aprl['harga']);
	

	//UPLOUD GAMBAR
	$foto =uploud();
	if (!$foto) {
		return false;
	}

	
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
	$query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
	mysqli_query($conn, $query_tambah);
	return mysqli_affected_rows($conn);

}
?>
