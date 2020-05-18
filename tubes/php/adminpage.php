<?php
//menghubungkan dengan file php lainnya

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="../css/main.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
  <title>admin</title>
  <style>
    
    header, main, footer,.content {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer,.content {
        padding-left: 0;
}
    }
  </style>
</head>
<body >
<nav class="teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
<a href="adminpage.php" class="brand-logo center">ADMIN PAGE</a>
<a href="#" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
       
 

<ul class="right collection hide-on-small-and-down" style="margin:0px;
      border: 0px solid transparent">
       
        
      </ul>
    </div>
  </div>
</nav>


<ul class="side-nav fixed" id="sidenav">
  <li>
    <div class="user-view">
<div class="background">
  <img src="../assets/img/z.jpeg" alt="" class="responsive-img">
</div>
<a href="">
  <img src="../assets/img/avatar/avatar-15.png" alt="" class="circle">
  <span class="avatar-status avatar-online"></span>
</a>
<span class="white-text name">Alita Eugenia</span>
<span class="white-text email">alitaeugenia@gmail.com</span>
    
    </div>
  </li>


<li>
  <a href="adminpage.php"><i class="material-icons blue-text">dashboard</i>Dashboard
  </a>
</li>

<li>
    <a href="admin.php"><i class="material-icons blue-text">cast</i>Data
    </a>
</li>
 <li>
                  <a class="btn waves-effect waves-light gradient-45deg-red-pink" href="tambah.php" target="_blank">
                    <i class="material-icons white-text">file_upload</i>Add data!
                  </a>
                </li>

<div class="divider"></div>
<li>
    <a href="Logout.php"><i class="material-icons blue-text">exit_to_app</i>Logout
    </a>
</li>
</ul>






                

<div class="content center">
  <div class="row">
      <div class="col s12 l4 m4">
          <div class="card-panel" style="color: blue;">
            <h5>Profile Admin <a href=""> <span><i class="material-icons tiny">open_in_new</i></span></a></h5>

            <div class="card-content center">
                      <img src="../images/avatar/avatar-15.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                      <br>
                      <span class="card-title activator grey-text text-darken-4">ALITA EUGENIA</span>
                      <p>
                        <i class="material-icons">perm_identity</i> CEO</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> 08222 8989</p>
                      <p>
                        <i class="material-icons">email</i> alitaeugenia@gmail.com</p>
                        

    <a href="admin.php">Data<br>
 


                  <a href="tambah.php" target="_blank">
                    Add data!
                  </a>
             
<div class="divider"></div>

    <a href="Logout.php">Logout
    </a>

                    </div>
    
      </div>
    </div>

</div>





  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
    
      $('.button-collapse').sideNav();
    });
  </script>
 
</body>

</html>