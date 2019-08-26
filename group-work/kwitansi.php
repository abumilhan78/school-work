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
        <form action="output-kwitansi.php" method="post" class="align-content-center">
            <div class="form-group col-md-8">
                <label>Nama Kasir</label>
                <input type="text" class="form-control" placeholder="Nama Kasir">
            </div>
                
                <div class="custom-control custom-checkbox">
                <label style="position:auto;">Barang Yang Dibeli</label>
                <input type="text" readonly class="form-control-plaintext blockquote-footer" value="Centang Barang Yang Akan Dibeli">
                    <input type="checkbox" class="custom-control-input" id="check1">
                    <label class="custom-control-label" for="check1">Mijon</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check2">
                    <label class="custom-control-label" for="check2">IndoNoodle</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check3">
                    <label class="custom-control-label" for="check3">bengkuadrat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check4">
                    <label class="custom-control-label" for="check4">akua</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check5">
                    <label class="custom-control-label" for="check5">susu cap berduit</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check6">
                    <label class="custom-control-label" for="check6">teh thai</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check7">
                    <label class="custom-control-label" for="check7">es genggam</label>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="form-group col-md-6">
                    <label>Pelanggan</label>
                    <select class="custom-select custom-select-md mb-3">
                        <option selected>Umum</option>
                        <option value="1">Member</option>
                        <option value="2">Eksekutif</option>
                    </select>
                </div>

                <div class="form-row">
                <div class="form-group">
                    <label>Kartu Yang Tersedia</label>&nbsp; &nbsp;
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kartu"  value="Laki-laki">
                    <label class="form-check-label">Visa</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kartu"  value="Perempuan">
                    <label class="form-check-label">BRI</label>
                    </div>
                </div>
        </form>
    </fieldset>


    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>