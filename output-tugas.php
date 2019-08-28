<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Form</legend>
        <?php
            if (isset($_POST['send'])) {
                $nama = $_POST['nama'];
                $jln = $_POST['jln'];
                $cmt = $_POST['cmt'];
                $kota = $_POST['kota'];
                $prov = $_POST['prov'];
                $pos = $_POST['pos'];
                $nabar = $_POST['nabar'];
                $harga = $_POST['harga'];
                $qty = $_POST['qty'];
                $desc = $_POST['desc'];
                $tgl = $_POST['tgl'];
                $tgl = date('l-m-Y', strtotime($tgl));
                $disk;
                $t_h = $qty*$harga;
                 
                if ($qty > 10) {
                    $disk = 0.1*$t_h;
                }else if($qty > 5){
                    $disk = 0.5*$t_h;
                }
                $after = $t_h-$disk;
                if (isset($_POST['send'])) {
                    $qty = $_POST['qty'];
                    if($qty<0){
                    echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
                    } else{
                    echo "<script>alert('Data berhasil di tambahkan!');</script>";
                    echo "Nama Anda : $nama<br>";
                    echo "Alamat Anda : Jln. $jln, Kecamatan $cmt, Kota $kota, Provinsi $prov, Kodepos : $pos<br>";
                    echo "Tanggal Pembelian : $tgl";
                    echo "<hr>Nama Barang : $nabar<br>";
                    echo "Keterangan Barang : <b>$desc</b><br><hr>";
                    echo "Harga Barang : $harga<br>";
                    echo "Kuantitas : $qty<br>";
                    echo "Harga Yang Harus Dibayar : <b>$after</b>";

                    }
                }
                
            }
        ?>
    </fieldset>
</body>
</html>