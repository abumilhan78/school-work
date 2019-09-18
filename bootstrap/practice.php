<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    
    <title>Document</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DIDN'T</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Another</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">Formulir</div>
                    <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id=""><br>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name ="send" class=" btn btn-outline-info">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
          if (isset($_POST['send'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
          
        ?>
        
          <div class="col-md-8">
            <center><h2>Hasil</h2></center>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><?php echo $nama; ?></td>
                  <td><?php echo $alamat; ?></td>
                </tr>
              </table>
            </div>
          
        <?php } ?>
        </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>