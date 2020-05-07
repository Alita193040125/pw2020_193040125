

<?php
require 'php/functions.php';


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
</head>
<body bgcolor="darksalmon">

  <div class="container">
    <h1>DAFTAR APPAREL</h1>
  	<form action="" method="get">
	<input type="text" name ="keyword" autofocus>
	<button type="submit" name="cari">cari!</button>
</form>
  <?php if(empty($apparel)) : ?>
        	<tr>
        		<td colspan="7">
        			<h1>Data tidak ditemukan</h1>
        		</td>
        	</tr>
        	<?php else : ?>

<?php foreach ($apparel as $aprl) : ?>

      <tr>
      
       
<p class="nama_Pakaian">
<a href="php/detail.php?no=<?= $aprl['no'] ?>">
<?= $aprl['nama_Pakaian'] ?>
</a>
</p>
 </tr>



<?php endforeach; ?>
<?php endif; ?>
  
</div>
<a href="php/login.php">
	<button type="">Masuk ke halaman admin</button>
</a>
</body>
</html>

