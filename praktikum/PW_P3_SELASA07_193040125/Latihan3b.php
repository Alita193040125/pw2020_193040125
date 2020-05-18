<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .css{
                font-size : 40px ;
                font-family : arial;
                font-style : italic;
                font-weight : bold;
            }

    </style>
</head>
<body>

<?php

$jawabanIsset = "Isset adalah = digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum <br><br>";
$jawabanEmpty = "Empty adalah =  fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong";


function soal($style){
    echo "<div class='$style'>" . $GLOBALS["jawabanIsset"]." ".$GLOBALS["jawabanEmpty"]. "</div>";
}

soal("css");
?>
    
</body>
</html>


