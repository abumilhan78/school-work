<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="outdaftar.php" method="post">
        No Pendaftaran <input type="text" name="daft" ><br>
        NISN           <input type="number" name="nisn"><br>
        Nama           <input type="text" name="nama"><br>
        Alamat         <input type="textarea" name="adress"><br>
        Tempat Lahir   <input type="text" name="tempat"><br>
        Tanggal Lahir  <input type="date" name="lahir"><br>
        Asal Sekolah   <input type="text" name="asal"><br>
        Jenis Kelamin  <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                       <input type="radio" name="gender" value="Perempuan"> Perempuan<br>
        Jurusan        <select name="jur">
                        <option value="RPL">RPL</option>
                        <option value="TKRO">TKRO</option>
                        <option value="TBSM">TBSM</option> 
                       </select><br>
        Nama Ayah      <input type="text" name="ayah"><br>
        Pekerjaan Ayah <input type="text" name="kerja"><br>
        Nama Ibu       <input type="text" name="ibu"><br>
        Pekerjaan Ibu  <input type="text" name="kerjai"><br>
        Hobi           <input type="checkbox" name="mancing" value="Mancing">Mancing<br>
                       <input type="checkbox" name="tidur" value="Tidur">Tidur<br>
                       <input type="checkbox" name="hidup" value="Hidup">Hidup<br>
                       <input type="checkbox" name="terbang" value="Terbang">Terbang<br>
                       <input type="checkbox" name="diving" value="Diving">Diving<br>
        Agama          <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Nasrani">Nasrani</option>
                        <option value="Yahudi">Yahudi</option>
                       </select><br>
                       <input type="submit" value="kirim" name="simpan">
                       <input type="reset" value="reset">
    </form>
</body>
</html>