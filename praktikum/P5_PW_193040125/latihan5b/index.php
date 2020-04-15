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
 <table cellpadding = "10" cellspacing = "0" border="1" >

        <tr bgcolor="darksalmon">
            <th>no</th>
            <th>foto </th>
            <th>nama Pakaian</th>
            <th>Bahan Pakaian</th>
            <th>merk</th>
            <th>harga</th>
        </tr>
<?php  $i = 1 ?>
<?php foreach ($apparel as $aprl) : ?>

      <tr bgcolor="pink">
                <td><?= $i ?></td>
              <td><img src="assets/img/<?= $aprl["foto"];  ?>"> </td>
               <td><?=  $aprl["nama Pakaian"] ?> </td>
                <td><?= $aprl["Bahan Pakaian"]?> </td>
               <td><?= $aprl["merk"]?></td>
                <td><?= $aprl["harga"]?> </td>
             </tr>
       <?php $i++ ?>

<?php endforeach; ?>
    </table>
</div>

</body>
</html>

