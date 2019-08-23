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
    <title>Document</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                        if (isset($_POST['simpan'])) {
                        $nodaft = $_POST['daft'];
                        $nisn = $_POST['nisn'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['adress'];
                        $tempat = $_POST['tempat'];
                        $lahir = $_POST['lahir'];
                        $sekolah = $_POST['asal'];
                        $gender = $_POST['gender'];
                        $jur = $_POST['jur'];
                        $ayah = $_POST['ayah'];
                        $kerja = $_POST['kerja'];
                        $ibu = $_POST['ibu'];
                        $kerjai = $_POST['kerjai'];
                        $hobi;
                        if (isset($_POST['mancing'])) {
                            $hobi = "Mancing";
                        }
                        if (isset($_POST['tidur'])) {
                            $hobi = "Mancing";
                        }
                        if (isset($_POST['hidup'])) {
                            $hobi = "Mancing";
                        }
                        if (isset($_POST['terbang'])) {
                            $hobi = "Mancing";
                        }
                        if (isset($_POST['diving'])) {
                            $hobi = "Mancing";
                        }
                        $agama = $_POST['agama'];
                        

                        echo "<h1>Status Account : Activated</h1><br>";
                        echo "Nomor Pendaftaran : $nodaft<br>";
                        echo "NISN              : $nisn<br>";
                        echo "Nama Anda         : $nama <br>";
                        echo "Alamat            : $alamat<br>";
                        echo "Tempat Lahir      : $tempat<br>";
                        echo "Tanggal Lahir     : $lahir<br>";
                        echo "Asal Sekolah      : $sekolah<br>";
                        echo "Jenis Kelamin     : $gender<br>";
                        echo "Jurusan           : $jur<br>";
                        echo "Nama Ayah         : $ayah<br>";
                        echo "Pekerjaan Ayah    : $kerja<br>";
                        echo "Nama Ibu          : $ibu<br>";
                        echo "Pekerjaan Ibu     : $kerjai<br>";
                        echo "Hobi              : $hobi<br>";
                        echo "Agama             : $agama<br><br>";
                        
                        echo "Hi $nama!!!";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>