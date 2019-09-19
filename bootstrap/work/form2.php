<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['send'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $tgl = $_POST['tgl'];
        $jml = $_POST['jml'];
        
    }
?>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Kuumbiyuutar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="login.php" method="post">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="send">Login</button>
    </form>
  </div>
</nav>
</header>
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">Detail Buku</div>
                    <div class="card-body">
                        <?php 
                    
                            for ($i=0; $i < $jml; $i++) { 
                                
                            
                        ?>
                        <form action="formpro.php" method="post">
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                            <input type="text" name="jdl[]" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <label>Kode Buku</label>
                          <input type="text" name="kd[]" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <label>Pengarang</label>
                          <input type="text" name="ngar[]" class="form-control" id="">
                        </div>
                        <div class="form-group">
                          <label>Jenis Buku</label>
                          <select class="custom-select custom-select-md mb-3" name="jenis[]">
                                <option value="Novel" selected>Novel</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Horror">Horror</option>
                                <option value="Cergam">Cergam</option>
                                <option value="Komik">Komik</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Harga Buku</label>
                            <input type="number" name="hrg[]" class="form-control" id=""><br>
                        </div><hr class="bg-danger">
                            <?php } ?>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name ="send" class=" btn btn-outline-info btn-block">
                        </div>
                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                        <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                        <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                        <input type="hidden" name="jml" value="<?php echo $jml; ?>">
                        </form>
                    </div>
                </div>
            </div>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>