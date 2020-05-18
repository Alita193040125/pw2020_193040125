<?php
echo "<h2>Daftar Peserta</h2>";
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

echo "<table>";
echo "<tr>";
echo "<td>No.KTP</td>";
echo "<td>:$ktp</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Nama</td>";
echo "<td>:$nama</td>";
echo "</tr>";

echo "<tr>";
echo "<td>alamat</td>";
echo "<td>:$alamat</td>";
echo "</tr>";
echo "</table>";

?>