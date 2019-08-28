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
        </nav>
    </header>
    <fieldset class="container">
        <form action="output-kwit.php" method="post" class="align-content-center">
            <div class="form-group col-md-8">
                <label>Nama Kasir</label>
                <input type="text" name="kasir" class="form-control" placeholder="Nama Kasir">
            </div>
                
                <div class="custom-control custom-checkbox" name="barang">
                <label style="position:auto;">Barang Yang Dibeli</label>
                <input type="text" readonly class="form-control-plaintext blockquote-footer" value="Centang Barang Yang Akan Dibeli">
                    <input type="checkbox" name="mijon" class="custom-control-input" id="check1">
                    <label class="custom-control-label" for="check1">Mijon &nbsp; (Rp. 5000)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="indonoodle" class="custom-control-input" id="check2">
                    <label class="custom-control-label" for="check2">IndoNoodle &nbsp; (Rp. 3000)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="bengkuadrat" class="custom-control-input" id="check3">
                    <label class="custom-control-label" for="check3">bengkuadrat &nbsp; (Rp. 1500)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="akua" class="custom-control-input" id="check4">
                    <label class="custom-control-label" for="check4">akua &nbsp; (Rp. 5000)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="susu" class="custom-control-input" id="check5">
                    <label class="custom-control-label" for="check5">susu cap berduit &nbsp; (Rp. 8000)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="thai" class="custom-control-input" id="check6">
                    <label class="custom-control-label" for="check6">teh thai &nbsp; (Rp. 5000)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="es" class="custom-control-input" id="check7">
                    <label class="custom-control-label" for="check7">es genggam &nbsp; (Rp. 10000)</label>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="form-group col-md-6">
                    <label>Pelanggan</label>
                    <select class="custom-select custom-select-md mb-3" name="pelanggan">
                        <option value="Umum" selected>Umum</option>
                        <option value="Member">Member</option>
                        <option value="Eksklusif">Eksklusif</option>
                    </select>
                </div>

                <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Kartu Yang Tersedia</label>&nbsp; &nbsp;
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kartu"  value="Visa">
                    <label class="form-check-label">Visa</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kartu"  value="BRI">
                    <label class="form-check-label">BRI</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kartu"  value="Mandiri">
                    <label class="form-check-label">Mandiri</label>
                    </div>
                </div><br>
                <div class="form-group col-md-12">
                    <label>Catatan Tambahan</label>
                    <input type="textarea" name="cat" class="form-control">
                </div>
                <div class="form-group col-md-12">
                <label>Bayar</label>
                <input type="text" name="bayar" class="form-control" placeholder="Bayar">
            </div>
                
                <div class="form-group">
                    <input type="submit" value="Kirim" class="btn btn-primary btn-block" name="send">
                </div>
        </form>
    </fieldset>


    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>