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
    <title>Form Penggajian</title>
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
</nav><br><br><br>
    <div class="container">
    <div class="jumbotron-fluid bg-info">
        <?php
            if (isset($_POST['send'])) {
                $nama = $_POST['nama'];
                $jamker = $_POST['jamker'];
                $jam_lembur = $jamker-300;
                $jk = $_POST['jk'];
                $jumnak = $_POST['jumlah_anak'];
                $t_anak = $jumnak*100000;
                $masukan = $_POST['masukan'];
                $jabat = $_POST['jabatan'];
                $kata;
                $asuransi;
                $gajab;
                

                if ($jabat == "Direktur") {
                    $gajab = 7000000;
                }else if($jabat == "Back-End"){
                    $gajab = 5000000;
                }else if($jabat == "Front-End"){
                    $gajab = 4500000;
                }else if($jabat == "Marketing"){
                    $gajab = 3000000;
                }

                if (isset($_POST['asuransi'])) {
                    $asuransi = 200000;
                    $kata = "Anda Menggunakan Asuransi Perusahaan<br>Anda Dikenakan Biaya Sebesar Rp. $asuransi";
                }else{
                    $asuransi=0;
                    $kata = "Anda Tidak Menggunakan Asuransi Perusahaan";
                }

                if ($jamker > 300) {
                    $lembur = $jam_lembur*300000;
                }else{
                    $jam_lembur = 0;
                }
                $total = $gajab+$t_anak+$t_istri-$asuransi;
                echo "Nama Anda : <h1>$nama</h1><br>";
                echo "Divisi : <b>$jabat</b>";
                echo "<hr>";
                echo "Jenis Kelamin : $jk<br>";
                echo "Jam Kerja : $jamker Jam<br>";
                echo "Jam Lembur : $jam_lembur Jam<br>";
                echo "Gaji Lembur : Rp. $lembur<br>";
                echo "Tunjangan Anak : Rp. $t_anak<br>";
                echo "Gaji Pokok : Rp. $gajab<br>";
                echo "$kata<br><hr>";
                echo "Total Gaji : <b>Rp. $total</b>";
            }
        ?>
    </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>