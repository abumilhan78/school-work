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
        <legend>Form Array</legend>
        <form action="" method="get">
            <label for="">Masukan Jumlah</label>
            <input type="number" name="jml">
            <br>
            <input type="submit" value="Simpan" name="send">
        </form>
        <hr>
        <?php
            if (isset($_GET['send'])) {
                $jmlform = $_GET['jml'];
                for ($i=0; $i < $jmlform; $i++) { 
                
        ?>
        <form action="formloopro.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama[]" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas[]" required><br>
            <br>
            <?php }  ?>
            <input type="submit" value="Simpan" name="submit">
        </form>
                <?php } 
                ?>
    </fieldset>
</body>
</html>