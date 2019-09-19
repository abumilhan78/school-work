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
            $judul = $_POST['jdl'];
            $kode = $_POST['kd'];
            $ngarang = $_POST['ngar'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['hrg'];
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
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
    <div class="card text-white bg-info mb-3 align-content-center">
        <div class="card-header">Invoice Pembelian Buku</div><br>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Jumlah</th>
                            <th>Tanggal Pembelian</th>
                        </tr>
                        <tr>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jk; ?></td>
                            <td><?php echo $jml; ?></td>
                            <td><?php echo $tgl; ?></td>
                        </tr>
                        
                    </table><hr class="bg-white">
                    <table class="table table-hover">
                    <center><h5>Daftar Buku Yang Di Beli</h5></center>
                        <tr>
                            <th>Nomor</th>
                            <th>Judul</th>
                            <th>Kode</th>
                            <th>pengarang</th>
                            <th>Jenis Buku</th>
                            <th>Harga(Rp)</th>
                        </tr>
                        <?php 
                        for ($i=0; $i < $jml; $i++) { 
                            # code...
                            
                        ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $judul[$i]; ?></td>
                            <td><?php echo $kode[$i]; ?></td>
                            <td><?php echo $ngarang[$i]; ?></td>
                            <td><?php echo $jenis[$i]; ?></td>
                            <td><?php echo $harga[$i]; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <center><h5>Total Pembayaran</h5></center>
                    <hr class="bg-white">
                    <b>Sub Total</b><p align="right"><?php  ?></p>
                </div>
            </div>           
        </div>
    </div>
    </div>
    </div>
    </div>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>