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
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>tubes</title>
  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">

<!-- my css -->
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Alita Store</a>

      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">

       
        <li><a href="index.php">Home</a></li>

  
        <li><a href="#product">All Product</a></li>
        <li> <a class="waves-effect waves-light btn-small" href="php/login.php">Login</a></li>
      </ul>
    </div>
  </nav>
</div>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Home</a></li>
    <li><a href="badges.html">Brand</a></li>
    <li><a href="#product">All Prouduct</a></li>
<li> <a class="waves-effect waves-light btn-small" href="php/login.php">Login</a></li>
  </ul>

      <div class="col-s12">
           <div class="slider">
        <ul class="slides">
          <li>
            <img src="assets/img/slider/1.webp">
            <div class="caption center-align">
              <h3 class="white-text">ALITA STORE</h3>
              <h5 class="light grey-text text-lighten-3">Your shopping solutions</h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/2.jpeg">
            <div class="caption right-align">
              <h3>FIND YOUR PERFECT STYLE!</h3>
              <h5 class="light grey-text text-lighten-3"></h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/3.jpeg">
            <div class="caption center-align">
              <h3>find your best fashion

</h3>
              <h5 class="light grey-text text-lighten-3"></h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/4.jpeg">
            <div class="caption center-align">
              <h3></h3>
              <h5 class="light grey-text text-lighten-3"></h5>
            </div>
          </li>
       </div>   
   </div>
</div>


       <div class="container grey-text">
     <h3 class="header center">DAFTAR APPAREL</h3>
    

<form action="" method="get">
        <div class="input-field">
         <center><input type="text" name ="keyword" autofocus style="width: 500px;">
<button class="waves-effect success darken-1 btn" type="submit" name="cari">Search</button></center> 
        </div>
      </form>

  <?php if(empty($apparel)) : ?>
          <tr>
            <td colspan="7">
              <h1 class="header center teal-text text-lighten-2"><i>Data tidak ditemukan</i></h1>
             
            </td>
          </tr>
          <?php else : ?>
            

<?php foreach ($apparel as $aprl) : ?>
  <section id="product" class="about scrollspy">
<div class="row mx-auto mt-5">
  <div class="container">
   <div class="col s12 mt-3" style="width: 16rem;">
    <div class="item">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/<?= $aprl['foto']; ?>" class="foto">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <span class="card-title black-text text-darken-3"><?= $aprl['nama_Pakaian'] ?></span>
          
          <p><del class="red-text"><i>Rp 2.000000 </i> </del> <br><b> Rp <?= $aprl['harga'] ?></b></p><br>
         <i class="material-icons green-text">local_grocery_store</i> 
        </div>
        <div class="card-action center">
          <a href="php/detail.php?no=<?= $aprl['no']; ?>">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php endforeach; ?>
<?php endif; ?>
  
</div>
</div>
</section>




        </div>
      </div>
</div>
    </div>
  </div>

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Alita Store</h5>
                <p class="grey-text text-lighten-4">jika anda memiliki kendala saat mengakses Alita Store silahkan hubungi contact ini</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">telp : 02382719219</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">email : alitastore@gmail.com</a></li>
    
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Alitastore
            
            </div>
          </div>
        </footer>

</div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    
  $('.dropdown-trigger').dropdown();
  $('.carousel.carousel-slider').carousel({
    indicators:false,
          height: 500,
          transition: 600,
          interval: 3000
  });
  const Slider = document.querySelectorAll('.slider');
    M.Slider.init(Slider,{
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });
  </script>

</html>
