<?php
$conn = mysqli_connect("localhost","root","") or die("koneksi ke db gagal");
mysqli_select_db($conn, "pw_193040125") or die("database salah");
$result = mysqli_query($conn, "SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="container">
 <table cellpadding = "10" cellspacing = "0" border="1" style="text-align: center"; >
 	<h1><center>DAFTAR APPAREL</center> </h1>

        <tr bgcolor="darksalmon">
            <th>no</th>
            <th>foto </th>
            <th>nama Pakaian</th>
            <th>Bahan Pakaian</th>
            <th>merk</th>
            <th>harga</th>
        </tr>
<?php  $i = 1 ?>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr bgcolor="pink">
                <td><?= $i ?></td>
              <td><img src="assets/img/<?= $row["foto"];  ?>"> </td>
               <td ><?=  $row["nama Pakaian"] ?> </td>
                <td><?= $row["Bahan Pakaian"]?> </td>
               <td><?= $row["merk"]?></td>
                <td><?= $row["harga"]?> </td>
             </tr>
       <?php $i++ ?>

<?php endwhile; ?>
    </table>
</div>

</body>
</html>

