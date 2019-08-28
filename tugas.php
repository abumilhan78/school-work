<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><fieldset>
    <form action="output-tugas.php" method="post">
        
        <legend>Form</legend>
        <label>Nama : </label>
        <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        <label>Alamat : </label>
        <input type="text" name="jln" placeholder="Jalan Atau Kampung">
        &nbsp;<input type="text" name="cmt" placeholder="Kecamatan">
        &nbsp;<input type="text" name="kota" placeholder="Kota">
        &nbsp;<input type="text" name="prov" placeholder="Provinsi">
        &nbsp;<input type="number" name="pos" placeholder="Kode Pos">



        <br>
        <label>Nama Barang : </label>
        <input type="text" name="nabar" placeholder="Nama Barang"><br>
        <label>Harga Barang : </label>
        <input type="text" name="harga" placeholder="Harga Barang"><br>
        <label>Jumlah Barang : </label>
        <input type="text" name="qty" placeholder="QTY"><br>
        <label>Deskripsi : </label>
        <input type="textarea" name="desc" placeholder="Deskripsi"><br>
        <label>Tanggal Pembelian</label>
        <input type="date" name="tgl" placeholder="Tanggal Pembelian"><br>
        <input type="submit" value="Kirim" name="send">
        
    </form>
    </fieldset>
</body>
</html>


