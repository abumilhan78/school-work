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
        <legend>Pendaftaran TNI</legend>
        <form action="" method="get">
        <label>Nama</label>
        <input type="text" name="nama" required>
        <br><label>Berat Badan</label>
        <input type="number" name="bb" min="1" required>
        <br><label>Tinggi Badan</label>
        <input type="number" name="tb" min="1" required>
        <br><input type="submit" value="Simpan" name="send">
        </form>
    </fieldset>
    <?php
        if (isset($_GET['send'])) {
            $nama = $_GET['nama'];
            $bb = $_GET['bb'];
            $tb = $_GET['tb'];
            echo "<hr>";
            function daftar($nama, $bb, $tb)
            {
                if ($bb > 60 && $tb > 165) {
                    return "Nama Anda : $nama <br>Anda <b>LULUS</b>";
                }else{
                    return "Nama Anda : $nama <br>Anda <b>TIDAK LULUS</b>";
                }

            }

            $daft = daftar($nama,$bb,$tb);
            echo $daft;
        }
    ?>
</body>
</html>