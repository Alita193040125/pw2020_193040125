<?php
//array associative nilai [] menggunakan nama yang ditulis oleh string, kecuali dengan menggunakan print_r maka akan muncul semua variable contoh print_r($mahasiswa);

$mahasiswa = array("nama" => "Marsha",
"nrp" => "193040132", 
"alamat" => "Bandung",
"usia" => "19 tahun");
echo $mahasiswa ["nama"];
echo "<hr>";


//array biasa
$mahasiswa = array("Marsha", "193040132", "Bandung", "18 tahun");
echo $mahasiswa[0];