<?php
$mahasiswa = [
	"nama1" => ['nama' => 'Sandhika Galih', 'nrp' => '043040023', 'email' => 'sandhikagalih@unpas.ac.id', 'jurusan' => 'Teknik Informatika'],
	"nama2" => ['nama' => 'Doddy Ferdiansyah', 'nrp' => '144040004', 'email' => 'doddy@gmail.com', 'jurusan' => 'Teknik Mesin']

	];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Nomor 2</title>
 	<style type="text/css">
 		

 	</style>
 </head>
 <body>
 	<?php 
 		$a = 1;
 		foreach($mahasiswa as $daftar) {
 			echo "<tr>";
 				echo "<td>".$a."</td>";
 				echo "<td>Nama : ".$daftar['nama']."</td>";
 				echo "<td>NRP : ".$daftar['nrp']."</td>";
 				echo "<td>Email : ".$daftar['email']."</td>";
 				echo "<td>Jurusan : ".$daftar['jurusan']."</td>";
 			echo "</ul>";
 			$a++;
 		}

 	?>
 </body>
 </html>