<?php

//perhitungan determinan
$a = 1;
$b = 2;
$c = 3;
$d = 4;

$hasilHitung = ($a * $d) - ($b * $c);

//menampilkan matriks
function hitungDeterminan($a, $b, $c, $d){
    echo "<table style='border-left : 2px solid black; border-right:2px solid black;' cellpadding = '5' cellspacing = '5' >
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>
        <tr>
            <td>$c</td>
            <td>$d</td>
        </tr>
        </table>"; 

        //menampilkan teks dibawah matriks
    echo "<br><b>Determinan dari matriks tersebut adalah "  .  $GLOBALS["hasilHitung"]  . "</b>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Latihan 3D</title>
    </head>
    <body>

    <?php
        //memanggil fungsi functionDeterminan
        hitungDeterminan($a, $b, $c, $d); // isi dari parameter ini ada di variable di paling atas
    ?>

    </body>
</html>