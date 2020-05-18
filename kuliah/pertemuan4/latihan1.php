<?php
 $lirik = 
 "balonku ada lima<br>
 rupa rupa warnanya<br>
  hijau kuning kelabu<br>
   merah muda dan biru,<br>
   meletus balon hijau door,<br>
   hatiku sangat kacau,<br>
   balon ku tinggal 4 ku pegang erat erat";

$lirik1= str_replace("a", "o", $lirik);
$lirik2= str_replace("i", "o", $lirik1);
$lirik3= str_replace("u", "o", $lirik2);
$lirik4= str_replace("e", "o", $lirik3);

echo "$lirik4";
//function yang baik adalah function yang hanya mengerjakan 1 hal saja
?>