<?php 
include 'db/database.php';
$barang = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Cart Table(Exam)</title>
</head>
<body>
    <?php
    foreach ($barang->edit($_GET['id']) as $key) {
        $id = $key['id'];
        $nama = $key['nama_produk'];
        $kategori = $key['kategori'];
        $jml = $key['jml_produk'];
        $hrg = $key['hrg_produk'];
        $desk = $key['desk'];
        $sub = $key['sub_total'];
    }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center" style="padding: 20px;">
            <div class="col-md-12">
                <div class="card bg-info text-white">
                    <div class="card-header bg-dark">Data Keranjang
                        
                    </div>
                    <div class="card-body">
                        <form action="db/proses.php?aksi=tambah" method="post">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" disabled value="<?php echo $nama; ?>" name="nama" required>
                                </div>
                                <div class="form-group">
                                        <label>Kategori</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $kategori; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Produk</label>
                                    <input type="number" class="form-control" disabled value="<?php echo $jml; ?>" name="jml" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="number" class="form-control" disabled value="<?php echo $hrg; ?>" name="hrg" required>
                                </div>
                                <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="desk" class="form-control" disabled required><?php echo $desk; ?></textarea>
                                </div>
                                <div class="form-group">
                                        <a href="index.php" class="btn btn-warning">Kembali</a>
                                </div>
                                
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>