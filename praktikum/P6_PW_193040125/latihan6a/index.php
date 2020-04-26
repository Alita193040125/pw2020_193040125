<?php
require 'php/functions.php';
$apparel = query("SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1><center>DAFTAR APPAREL</center></h1>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="container">
 <table cellpadding = "13" cellspacing = "0" border="1" bgcolor="pink">

        <tr bgcolor="lightblue">
            <th>no</th>
            <th>opsi</th>
            <th>foto </th>
            <th>nama Pakaian</th>
            <th>Bahan Pakaian</th>
            <th>merk</th>
            <th>harga</th>
        </tr>
<?php  $i = 1 ?>
<?php foreach ($apparel as $aprl) : ?>

      <tr>
                    <td><?= $i ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
    
              <td><img src="assets/img/<?= $aprl["foto"];  ?>" alt=""> </td>
               <td><?=  $aprl["nama_Pakaian"] ?> </td>
                <td><?= $aprl["Bahan_Pakaian"]?> </td>
               <td><?= $aprl["merk"]?></td>
                <td>Rp <?= $aprl["harga"]?> </td>
             </tr>
       <?php $i++ ?>

<?php endforeach; ?>
    </table>
</div>

</body>
</html>

