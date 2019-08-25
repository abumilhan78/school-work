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
    <style>
      
      .baru{
        position : absolute;
        left : 5%;
      }
    </style>
    
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
</nav>
  
</header>
    <fieldset class="container">

    <form action="output-gaji.php" method="post" class="align-content-center">
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Jam Kerja</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Jam Kerja">
    </div>
  </div>

  <div class="form-row">
      <div class="form-group">
        <label>Jenis Kelamin</label>&nbsp; &nbsp;
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
      </div>
      
  </div>
  <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Asuransi</label>
        <input type="text" readonly class="form-control-plaintext blockquote-footer" value="Centang Jika Anda Menggunakan Asuransi Perusahaan">
      </div>

  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="inputAddress">Jumlah Anak</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="Jumlah Anak">
  </div>
  <div class="form-group col-md-5">
    <label for="inputAddress2">Jumlah Istri</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Jumlah Istri">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputCity">Masukan</label>
      <input type="textarea" class="form-control" placeholder="Masukan Untuk Perusahaan">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Jabatan</label>
      <select class="custom-select custom-select-md mb-3">
  <option selected>Direktur</option>
  <option value="1">Back-End</option>
  <option value="2">Front-End</option>
  <option value="3">Marketing</option>
</select>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-block baru" value="Kirim">
    </div>
    </form>
    </fieldset>
  
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>