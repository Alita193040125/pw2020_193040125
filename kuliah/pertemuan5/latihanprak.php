<?php
 $angka = array(1,2,3,4,5,6);
 $bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "november", "oktober", "desember");
 echo "<br>";

 $hasil = array_pop($bulan);
 print_r($bulan); //untuk menghapus elemen terakhir array dan mengambil array dari yang terakhir

 //array push menambahkan angka

 echo "<hr>";
 $hasil = array_push ($angka, 7,8,9,10); //untuk menambahkan elemen
 print_r($angka);

echo "<hr>";
$hasil = rsort($angka); //untuk menurun, descending misal 10,9,8
print_r($angka);
echo "<hr>";
$hasil = sort($bulan); //untuk menaik, ascending
print_r($bulan);

//krsort berdasarkan indexnya array urut dari index terakhir ke pertama
//arsort pengurutan array berdasarkan value terbesar dari atas ke bawah
//ksort urut dari index awal ke akhir
//asort pengurutan array berdasarkan value terkecil.
//sort dari angka terbesar, 10,9,8,
//rssort dari anka terkecil



?>