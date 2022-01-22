<video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
  <source src="5.mp4" type="video/mp4">
</video>
<?php
session_start();
//echo $_SESSION['login'];
if (isset($_SESSION['status'])) {
  $nama = $_SESSION['nama'];
  $jabatan = $_SESSION['jabatan'];
  include('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Layout</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>
#background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}
</style>
<body>
    
<div class="container">
       <div class="row">
        <div class="col">
        <br>
        <br>
        <h1 class="text-light"> My Website</h1>
        </div>
    </div>
    <!--END HEADER--->
    <!--NAVIGASI--->
    <div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=login">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=anggota">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=buku">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=petugas">Petugas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="?page=logout"><button class="btn-danger"> Logout</button></a>
    </div>
  </div>
</nav>
        </div>
    </div>
      <!-- END NAVIGASI--->
    <!--CONTENT--->
        <div class="row">
        <div class="col-12 ">
            <?php
            if(isset($_GET['page']))
            {
                if($_GET['page'] == "anggota")
                {
                    include('anggota.php');
                }elseif($_GET['page'] == "anggota-delete")
                {
                    include('anggota-delete.php');
                }elseif($_GET['page'] == "anggota-insert")
                {
                    include('anggota-insert.php');
                }elseif($_GET['page']=="anggota-edit")
                {
                    include('anggota-edit.php');
                }elseif($_GET['page']=="anggota-edit-proses")
                {
                    include('anggota-edit-proses.php');
                }elseif($_GET['page'] == "petugas")
                {
                    include('petugas.php');
                }elseif($_GET['page'] == 'buku')
                {
                    include('buku.php');
                }elseif($_GET['page'] == 'logout')
                {
                    include('logout.php');
                }
                else
                {
                    echo "<br><br><center><h1>SELAMAT DATANG $nama</h1></center></br></br>";
                    echo "<h1><center>$jabatan INDONESIAN RESTAURANT</center></h1>";
                }
            }
            ?>
        </div>
        <div class="col-8 ">
        </div>
        <div class="col-2 ">
            
        </div>
    </div>
<!--END CONTENT--->
<!--FOOTER--->
  <h3>
    <div class="row">
    <div class="col text-center">
    <div class="text-light">
    SITI KHODIJAH - 2021
    
    </div>
    </div>
    <!--FOOTER--->
    </div>
    </div>
  </h3>
  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else{
  ?>
  <script>
     window.location.href= 'http://localhost/mywebsite1-main/index.php?';
  </script>
  <?php
}
?>