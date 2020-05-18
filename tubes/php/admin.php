<?php
//menghubungkan dengan file php lainnya

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">

<!-- my css -->
<body>
  <h3 class="center">LIST APPAREL</h3>
	<a class="waves-effect brown darken-1 btn" href="adminpage.php">Kembali</a>
</div></div>
<form action="" method="get">
	<input type="text" name ="keyword" autocomplete="off" autofocus class="keyword" style="width: 500px;">
	<a class="waves-effect success darken-1 btn" type="submit" name="cari">cari!</a>
  
</form>
<table class="striped" cellpadding = "13" cellspacing = "0" border="1" bgcolor="pink">

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
         <div class="update">
             <a href="ubah.php?no=<?= $aprl['no'] ?>"><i class="material-icons">create</i></a></div>
         <div class="delete"> <a href="hapus.php?no=<?= $aprl['no'] ?>" onclick="return confirm('Hapus data??')"><i class="material-icons">delete</i> </a></div>

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
 
 <br><br>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>