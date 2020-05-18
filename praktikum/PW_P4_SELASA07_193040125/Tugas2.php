<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
    <style>
        img{
            width : 200px;
            height : 200px;
            
        }
        table{
            margin:auto;
        }
        tr{
            font-size: 20px;
        }
           
 </style>
</head>
<body>
    
<h1><center>DAFTAR APPAREL (PAKAIAN)</center></h1><br>
    <?php
        $Apparel = [
            "Pakaian1" => 
            ["gambar" => "<img src='assets/img/1.jpg'>" , "nama Pakaian" => "V neck dress" , "Bahan Pakaian" => "cotton viscose", "merk" => "H & M", "harga" => 350000],
            
            "Pakaian2" => 
            ["gambar" => "<img src='assets/img/2.jpg'>" , "nama Pakaian" => "Crossed Midi Dress" , "Bahan Pakaian" => "polyester", "merk" => "ZARA", "harga" => 899900 ],
           
            "Pakaian3" => 
            ["gambar" => "<img src='assets/img/3.jpg'>" , "nama Pakaian" => "Softspun double-V dress" , "Bahan Pakaian" => "rajut,polyester dan rayon spandek.", "merk" => "GAP", "harga" => 750100],
           
            "Pakaian4" => 
            ["gambar" => "<img src='assets/img/4.jpg'>" , "nama Pakaian" => "Wonen Romper" , "Bahan Pakaian" => "rayon", "merk" => "Uniqlo", "harga" => 625231 ],
           
            "Pakaian5" => 
            ["gambar" => "<img src='assets/img/5.jpg'>" , "nama Pakaian" => "Women's Long Shirt" , "Bahan Pakaian" => "Katun", "merk" => "Triset", "harga" => 499900 ],
           
            "Pakaian6" => 
            ["gambar" => "<img src='assets/img/6.jpg'>" , "nama Pakaian" => "Strapless Jersey Maxidress" , "Bahan Pakaian" => "polyester dan elastan", "merk" => "Ralph Lauren ", "harga" => 2475187],
           
            "Pakaian7" => 
            ["gambar" => "<img src='assets/img/7.jpg'>" , "nama Pakaian" => "Nude Embellished Dress" , "Bahan Pakaian" => "nilon. viscose dan elastane ", "merk" => "NEXT", "harga" => 1570922],
           
            "Pakaian8" => 
            ["gambar" => "<img src='assets/img/8.jpg'>" , "nama Pakaian" => "Aliyah Lace Up Dress" , "Bahan Pakaian" => "polyester", "merk" => "Guess", "harga" => 1462500],
           
            "Pakaian9" => 
            ["gambar" => "<img src='assets/img/9.jpg'>" , "nama Pakaian" => "The Feminine Lacoste Polo in Stretch Cotton" , "Bahan Pakaian" => "rayon", "merk" => "Lacoste", "harga" => 1470923],
           
            "Pakaian10" => 
            ["gambar" => "<img src='assets/img/10.jpg'>" , "nama Pakaian" => "Mango Silk Flower Dress" ,"Bahan Pakaian" => "polyester", "merk" => "Mango  ", "harga" => 2999720]
        ];
    ?>

    <table border = "1" cellpadding = "30px" cellspacing = "0" style="text-align: center;">

        <tr bgcolor="lightgrey">
            <th>Foto</th>
            <th>Nama </th>
            <th>Bahan Pakaian</th>
            <th>Merk</th>
            <th>Harga</th>
        </tr>

        <?php
            foreach($Apparel as $Pakaian){
                echo "<tr>";
                echo "<td>". $Pakaian["gambar"]."</td>";
                echo "<td>". $Pakaian["nama Pakaian"]."</td>";
                echo "<td>". $Pakaian["Bahan Pakaian"]."</td>";
                echo "<td>". $Pakaian["merk"]."</td>";
                echo "<td>"."Rp.  " . $Pakaian["harga"]."</td>";
                echo "</tr>";
            }
        ?>


    </table>




</body>
</html>