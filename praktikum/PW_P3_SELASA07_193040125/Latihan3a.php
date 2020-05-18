<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        .ganti_style{
            font-size : 28px ;
            font-family : arial;
            color :  #8c782d;
            font-style : italic;
            font-weight : bold;
        }

        .box{
            border : 2px solid black;
            width : 700px;
            border-radius : 5px;
            padding : 5px;
            box-shadow : 1px 1px 5px  5px grey;
        }

    </style>
</head>
<body>
    

<?php

function gantiStyle($tulisan, $style1, $style2){
    echo "<div class='$style2'><p class='$style1'> $tulisan</div>";
    
}

gantiStyle("Selamat datang di praktikum PW 2020", "ganti_style" , "box");


?>



</body>
</html>





