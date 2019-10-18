<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Tambah Produk</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
              <a class="nav-item nav-link" href="#">Pricing</a>
              <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header bg-dark">Detail Produk</div>
                         <div class="card-body">
                             
                            <form action="db/proses.php?aksi=tambah" method="post">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori" class="custom-select custom-select-md mb-3">
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                            <option value="Elektronik">Elektronik</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Utilities">Utilities</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Produk</label>
                                    <input type="number" class="form-control" name="jml" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="number" class="form-control" name="hrg" required>
                                </div>
                                <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="desk" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                        <input type="submit" name="save" class="btn btn-success btn-block" value="Simpan">
                                </div>
                                
                            </form>

                      </div>
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