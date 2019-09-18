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
      <li class="nav-item">
        <a class="nav-link" href="practice.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="practice2.php">Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log-Out</a>
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
<div class="card">
  <div class="card-header text-info bg-dark">
    Pendafaran Peserta Didik Baru
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Daftar!!</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Formulir Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Alamat</label>
                <textarea name="alamat" rows="5" class="form-control"></textarea>
            </div>
            
            <div class="form-row">
      <div class="form-group">
        <label>Jenis Kelamin</label>&nbsp; &nbsp;
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jk"  value="Laki-laki">
          <label class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jk"  value="Perempuan">
          <label class="form-check-label">Perempuan</label>
        </div>
      </div>
      </div>
      <div class="form-group">
                <label>Asal Sekolah</label>
                <input type="text" name="asal" class="form-control" required>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Nilai Bahasa Indonesia</label>
                <input type="number" name="indo" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Nilai Matematika</label>
                <input type="number" name="mtk" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Nilai IPA</label>
                <input type="number" name="ipa" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Nilai Bahasa Inggris</label>
                <input type="number" name="ing" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-success btn-block" name="send">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

    
  </div>
</div>
</div>
</div>
</div>
<?php 
    if (isset($_POST['send'])) {
        $nama = $_POST['nama'];
        $alam = $_POST['alamat'];
        $jk = $_POST['jk'];
        $asal = $_POST['asal'];
        $indo = $_POST['indo'];
        $mtk = $_POST['mtk'];
        $ipa = $_POST['ipa'];
        $ing = $_POST['ing'];

        $rata = ($indo+$mtk+$ipa+$ing)/4;
        $ket;
        if ($rata > 65) {
            $ket = "Diterima";
        }else {
            $ket = "Tidak Diterima";
        }
?>
<div class="container-fluid">
    <div class="col-md-12">
            <center><h2>Formulir</h2></center>
            <div class="table-responsive">
              <table class="table table-bordered table-active table-dark">
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Asal Sekolah</th>
                  <th>Nilai B. Indo</th>
                  <th>Nilai Matematika</th>
                  <th>Nilai IPA</th>
                  <th>Nilai Bahasa Inggris</th>
                  <th>Rata-rata</th>
                  <th>Keterangan</th>
                </tr>
                <tr>
                  
                  <td><?php echo $nama; ?></td>
                  <td><?php echo $alam; ?></td>
                  <td><?php echo $jk; ?></td>
                  <td><?php echo $asal; ?></td>
                  <td><?php echo $indo; ?></td>
                  <td><?php echo $mtk; ?></td>
                  <td><?php echo $ipa; ?></td>
                  <td><?php echo $ing; ?></td>
                  <td><?php echo $rata; ?></td>
                  <td><?php echo $ket; ?></td>
                </tr>
              </table>
            </div>
</div>
    <?php } ?>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
    <?php }else{
        header("location:login.php");
    } 
    ?>