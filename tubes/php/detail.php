<?php

if (!isset($_GET['no'])) {
	header("location : ../index.php");
	exit;
}
require 'functions.php';

$no = $_GET['no'];

$apparel = query("SELECT * FROM apparel WHERE no = $no")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">

</head>
<body>
  <div class="container">
  <H3 class="center">DETAIL PRODUCT</H3>
      <table class="responsive-table">
        <thead>
          <tr>
          	<th>Foto</th>
              <th>Nama Pakaian</th>
              <th>Bahan Pakaian</th>
              <th>merk Pakaian</th>
              <th>Harga</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          	<td><div class="foto">
	<img src="../assets/img/<?= $apparel["foto"]; ?>" alt=""></td></div>
            <td><p><?= $apparel["nama_Pakaian"]; ?></p></td>
            <td><p><?= $apparel["Bahan_Pakaian"]; ?></p></td>
            <td><p><?= $apparel["merk"]; ?></p></td>
            <td><p>Rp <?= $apparel["harga"]; ?></p></td>
          </tr>
     
   
       

	 </tbody>
      </table>
<a class="waves-effect blue darken-4 btn" type="submit" href="../index.php">back</a>
</div>

       <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>     
</body>
</html>