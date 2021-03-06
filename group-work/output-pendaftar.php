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
    <title>Form Pendaftaran SMK</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="penggajian.php">Penggajian</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kwitansi.php">Kwitansi<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pendaftaran.php">Pendaftaran Sekolah</a>
      </li>
      
    </ul>
  </div>
</nav><br><br><br>
    <div class="container">
    <div class="jumbotron-fluid bg-success">
        <?php
            if (isset($_POST['send'])) {
                $nama = $_POST['nama'];
                $nisn = $_POST['nisn'];
                
                $nik = $_POST['nik'];
                $tempat = $_POST['tempat'];
            
                $tl = $_POST['tgl'];
                $tl = date('l-m-Y', strtotime($tl));
                $ayah = $_POST['ayah'];
                $ibu = $_POST['ibu'];
                $p_ayah = $_POST['p_ayah'];
                $p_ibu = $_POST['p_ibu'];
                $asal = $_POST['asal'];
                $nomor = $_POST['nomor'];
                
                echo "Nama Anda : <h1>$nama</h1><br>";
                ?>
                <div class="custom-control">
                <?php
                echo "NISN : $nisn<br>NIK : $nik";
                echo "</div><br><hr>";
                echo "Tempat/Tanggal Lahir : $tempat, $tl<br>";
                echo "Asal Sekolah : $asal<br>";
                echo "Nama Ayah : $ayah<br>";
                echo "Pekerjaan Ayah : $p_ayah<br>";
                echo "Nama Ibu : $ibu<br>";
                echo "Pekerjaan Ibu : $p_ibu<br>";
                echo "Nomor Telepon : $nomor<br>";
            }
        ?>
    </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>