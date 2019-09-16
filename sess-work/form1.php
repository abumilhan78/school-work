<?php
session_start();
    if (isset($_SESSION['login'])) {
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Log-in</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="penggajian.php">Penggajian<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kwitansi.php">Kwitansi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pendaftaran.php">Pendaftaran Sekolah</a>
      </li>
      
    </ul>
  </div>
</nav>
</header>
<br><br><br>
    
    <div class="container jumbotron-fluid col-md-7">
    <p class="p-lg-7 text-lg-center text-info"><b>Toko Buku Lyoko</b></p>
    <form action="" method="post" class="align-content-center">
        <div class="form-group">
        <label>Masukan Nama :</label>
        <input type="text" name="user" class="form-control" placeholder="Username...">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" placeholder="Password...">
        </div>
        <div class="form-group">
      <input type="submit" class="btn btn-success btn-block" value="Kirim" name="send">
    </div>
    </form>
</div>

    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>