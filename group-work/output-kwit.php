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
    <title>Form Kwitansi</title>
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
      <li class="nav-item">
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
    <div class="jumbotron-fluid bg-info">
        <?php
            if (isset($_POST['send'])) {
                $kasir = $_POST['kasir'];
                $pelanggan = $_POST['pelanggan'];
                $kartu = $_POST['kartu'];
                $bayar = $_POST['bayar'];
                $b1;
                $b2;
                $b3;
                $b4;
                $b5;
                $b6;
                $b7;
                $total;
                $disc;
                $hrg;
                

                

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
                $total = $gajab+$t_anak-$asuransi;
                echo "Kasir : <h1>$kasir</h1><br>";
                echo "<hr>";
                ?>
                    <!-- <div class="card-group">
  <div class="card">
    <img src="aqua.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="indomie.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div> -->
                <?php
                echo "Barang Yang Dibeli : <br>";
                echo "<ol>";
                if (isset($_POST['mijon'])) {
                    $b1 = 5000;
                    echo "<li>Mijon</li>";
                }
                if (isset($_POST['indonoodle'])) {                    
                    $b2 = 3000;
                    echo "<li>IndoNoodle</li>";
                }
                if (isset($_POST['bengkuadrat'])) {                   
                    $b3 = 1500;
                    echo "<li>BengKuadrat</li>";
                }
                if (isset($_POST['akua'])) {
                    echo "<li>Akua</li>";
                    $b4 = 5000;
                }
                if (isset($_POST['susu'])) {                    
                    $b5 = 8000;
                    echo "<li>Susu Cap Berduit</li>";
                }
                if (isset($_POST['thai'])) {                   
                    $b6 = 5000;
                    echo "<li>Teh Thai</li>";
                }
                if (isset($_POST['es'])) {                    
                    $b7 = 10000;
                    echo "<li>Es Genggam</li>";
                }


                if ($kartu == "Visa") {
                    $disc = 0.03;
                }
                if ($kartu == "BRI") {
                    $disc = 0.05;
                }
                if ($kartu == "Mandiri") {
                    $disc = 0.04;
                }
                echo "</ol><br>";
                
                $total = $b1+$b2+$b3+$b4+$b5+$b6+$b7;
                $akh = $bayar-$total;
                
                echo "Pelanggan Adalah Seorang <b>$pelanggan</b><br>";
                echo "Total Bayar : <b>Rp. $total</b><br>";
                if ($bayar<0) {
                  echo "Uang Yang Dibayar : <b>Rp. 0</b><br>";
                }else{
                echo "Uang Yang Dibayar : <b>Rp. $bayar</b><br>";
                }
                
                
            }
        ?>
    </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>