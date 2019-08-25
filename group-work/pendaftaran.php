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
    <title>Form Pendaftaran SMK</title>
    <style>
        .date{
            position : absolute;
            left : 42%;
            top : 39.3%;
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
                <li class="nav-item">
                    <a class="nav-link" href="penggajian.php">Penggajian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kwitansi.php">Kwitansi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="penggajian.php">Pendaftaran Sekolah<span class="sr-only">(current)</span></a>
                </li>
                
                </ul>
            </div>
        </nav>
    </header>
    
    <fieldset class="container">
        <form action="output-kwitansi.php" method="post" class="align-content-center">
            <div class="form-row">
            <div class="form-group col-md-8">
                <label>NISN</label>
                <input type="number" class="form-control" placeholder="Nomor Induk Siswa Nasional">
            </div>
            <div class="form-group col-md-4">
                <label>NIK</label>
                <input type="number" class="form-control" name="" placeholder="Nomor Induk Kependudukan">
            </div>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="" class="form-control">
            </div>
            <div class="form-row">
            <div class="form-group col-md-5">
                <label>Tempat/Tanggal Lahir</label>
                <input type="text" name="" class="form-control" placeholder="Tempat">
            </div>
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            <div class="form-group col-md-5 date">
                <input type="date" name="" class="form-control datepicker selector" placeholder="Tanggal Lahir">
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nama Ayah</label>
                    <input type="text" name="" class="form-control" placeholder="Nama Ayah">
                </div>
                <div class="form-group col-md-6">
                    <label>Nama Ibu</label>
                    <input type="text" name="" class="form-control" placeholder="Nama Ibu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Pekerjaan Ayah</label>
                    <input type="text" name="" class="form-control" placeholder="Pekerjaan Ayah">
                </div>
                <div class="form-group col-md-5">
                    <label>Pekerjaan Ibu</label>
                    <input type="text" name="" class="form-control" placeholder="Pekerjaan Ibu">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Asal Sekolah</label>
                <input type="text" name="" class="form-control" placeholder="Asal Sekolah">
            </div>
            <div class="form-group col-md-6">
                <label>Nomor Telepon</label>
                <input type="number" name="" class="form-control" placeholder="Nomor Telepon">
            </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Kirim" class="btn btn-primary btn-block">
            </div>
        </form>
    </fieldset>


    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>