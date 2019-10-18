<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $jk = $data['jenis_kelamin'];
            $tgl = $data['tgl_lahir'];
            $umur = $data['umur'];
            $agama = $data['agama'];
            $alamat = $data['alamat'];
        }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
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
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Data Diri</div>
                         <div class="card-body">
                             
                            <form action="proses.php?aksi=tambah" method="post">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" value="<?php echo $nama; ?>" disabled name="nama" required>
                                </div>
                                <div class="form-group">
                                        <label>Jenis Kelamin</label>&nbsp; &nbsp;
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" <?php if($jk == "Laki-laki"){echo "checked";} ?> disabled  id="customRadioInline1" name="jk" value="Laki-laki" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-check form-check-inline custom-radio">
                                            <input class="custom-control-input" id="customRadioInline2" <?php if($jk == "Perempuan"){echo "checked";} ?> disabled type="radio" name="jk"  value="Perempuan">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" disabled name="tgl_lahir" value="<?php echo $tgl; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" disabled class="custom-select custom-select-md mb-3">
                                            <option value="Islam" <?php if ($agama == "Islam") {echo "selected";} ?>>Islam</option>
                                            <option value="Muslim" <?php if ($agama == "Muslim") {echo "selected";} ?>>Muslim</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" disabled class="form-control" required><?php echo $alamat; ?></textarea>
                                    </div>
                                    
                                
                            </form>

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