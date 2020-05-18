<?php

$teks1 = "marsha yunita dwi putri sarjono";

//menghitung jumlah karakter termasuk spasi atau menghitung panjang string
echo strlen($teks1) . "<br>";

//mengembalikan sebagian karakter dari string yang diberikan

echo substr($teks1, 7) . "<br>"; //akan muncul tulisan mulai dari index 7

//mengganti string / substring yang diberikan
$lirik = 
"Balonku ada lima <br>
Rupa-rupa warnanya <br>
Hijau, kuning, kelabu <br>
Merah muda dan biru <br>
Meletus balon hijau DOR! <br>
Hatiku sangat kacau <br>
Balonku tinggal empat <br>
Kupegang erat-erat";

$lirik1 = str_replace("a", "o", $lirik);
$lirik2 = str_replace("i", "o", $lirik1);
$lirik3 = str_replace("u", "o", $lirik2);
$lirik4 = str_replace("e", "o", $lirik3);

echo "$lirik4";

//function yg baik adalah function yang hanya mengerjakan 1 hal saja

//blok kode yg ditunjukka

?>