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
    <form action="outdaft.php" method="post">
        <div class="form-group">No Pendaftaran <input type="text" name="daft" class="form-control"></div><br>
        <div class="form-group">NISN           <input type="number" name="nisn" class="form-control"></div><br>
        <div class="form-group">Nama           <input type="text" name="nama" class="form-control"></div><br>
        <div class="form-group">Alamat         <input type="textarea" name="adress" class="form-control"></div><br>
        <div class="form-group">Tempat Lahir   <input type="text" name="tempat" class="form-control"></div><br>
        <div class="form-group">Tanggal Lahir  <input type="date" name="lahir" class="form-control"></div><br>
        <div class="form-group">Asal Sekolah   <input type="text" name="asal" class="form-control"></div><br>
        <div class="form-group">Jenis Kelamin  <input type="radio" name="gender" value="Laki-laki" class="form-control"> Laki-laki
                       <input type="radio" name="gender" value="Perempuan" class="form-control"> Perempuan</div><br>
        <div class="form-group">Jurusan        <select name="jur" class="form-control">
                        <option value="RPL">RPL</option>
                        <option value="TKRO">TKRO</option>
                        <option value="TBSM">TBSM</option> 
                       </select></div><br>
        <div class="form-group">Nama Ayah      <input type="text" name="ayah" class="form-control"></div><br>
        <div class="form-group">Pekerjaan Ayah <input type="text" name="kerja" class="form-control"></div><br>
        <div class="form-group">Nama Ibu       <input type="text" name="ibu" class="form-control"></div><br>
        <div class="form-group">Pekerjaan Ibu  <input type="text" name="kerjai" class="form-control"></div><br>
        <div class="form-group">Hobi           <input type="checkbox" name="mancing" value="Mancing" class="form-control">Mancing<br>
                       <input type="checkbox" name="tidur" value="Tidur" class="form-control">Tidur<br>
                       <input type="checkbox" name="hidup" value="Hidup" class="form-control">Hidup<br>
                       <input type="checkbox" name="terbang" value="Terbang"class="form-control">Terbang<br>
                       <input type="checkbox" name="diving" value="Diving" class="form-control">Diving<br></div>
        <div class="form-group">Agama          <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Nasrani">Nasrani</option>
                        <option value="Yahudi">Yahudi</option>
                       </select><br></div>
                      <div class="form-group"> <input type="submit" value="kirim" name="simpan" class="btn btn-success"></div>
                       <div class="form-group"> <input type="reset" value="reset" class="btn btn-failed"></div>
    </form>
</body>
</html>