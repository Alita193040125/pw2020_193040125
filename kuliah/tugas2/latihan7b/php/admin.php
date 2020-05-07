<?php
//menghubungkan dengan file php lainnya
require 'functions.php';



if(isset($_GET['cari'])) {
	$keyword =$_GET['keyword'];
	$apparel = query ("SELECT * FROM apparel WHERE 
		no LIKE '%$keyword%' OR 
		nama_Pakaian LIKE '%$keyword%' OR 
		Bahan_Pakaian LIKE '%$keyword%' OR 
		merk LIKE '%$keyword%' OR 
		harga LIKE '%$keyword%' ");
}else {

//melakukan query
$apparel = query("SELECT * FROM apparel");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="add">
	<a href="tambah.php">Tambah data!</a>
</div>
<form action="" method="get">
	<input type="text" name ="keyword" autofocus>
	<button type="submit" name="cari">cari!</button>
</form>
<table cellpadding = "13" cellspacing = "0" border="1" bgcolor="pink">

        <tr bgcolor="skyblue">
            <th>no</th>
            <th>opsi</th>
            <th>foto </th>
            <th>nama Pakaian</th>
            <th>Bahan Pakaian</th>
            <th>merk</th>
            <th>harga</th>
        </tr>

        <?php if(empty($apparel)) : ?>
        	<tr>
        		<td colspan="7">
        			<h1>Data tidak ditemukan</h1>
        		</td>
        	</tr>
        	<?php else : ?>
<?php  $i = 1; ?>
<?php foreach ($apparel as $aprl) : ?>

      <tr>
                    <td><?= $i; ?></td>
        <td>
         <div class="update"> <a href="ubah.php?no=<?= $aprl['no'] ?>"><button>Ubah</button></a></div>
         <div class="delete"> <a href="hapus.php?no=<?= $aprl['no'] ?>" onclick="return confirm('Hapus data??')"><button>Hapus</button> </a></div>

        </td>
              <td><img src="../assets/img/<?= $aprl["foto"];  ?>" alt=""> </td>
               <td><?=  $aprl["nama_Pakaian"] ?> </td>
                <td><?= $aprl["Bahan_Pakaian"]?> </td>
               <td><?= $aprl["merk"]?></td>
                <td>Rp <?= $aprl["harga"]?> </td>
             </tr>
       <?php $i++ ?>

<?php endforeach; ?>
<?php endif; ?>
</table>
<br>
 <div class="logout"> <a href="logout.php"><button>Logout</button></a></div>
 <br><br>
</body>
</html>