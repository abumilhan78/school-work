<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form action="" method="post">
        <label>Masukan Jumlah</label>
        <input type="number" name="jml" min="1"><br>
        <input type="submit" name="send" value="Simpan">
    </form>
    <hr>
    <form action="array-form-pro.php" method="post">
        <?php
            if (isset($_POST['send'])) {
                $jml_frm = $_POST['jml'];
                for ($i=0; $i < $jml_frm; $i++) { 
                    # code...
        ?>
        <label>Masukan Bilangan</label>
        <input type="text" name="bil[]" required>
        <label>Masukan Pangkat</label>
        <input type="text" name="pangkat[]" required><br><br>
                <?php } ?>
        <input type="submit" value="Send" name="smpn">
    </form>
                <?php } ?>
    </fieldset>
</body>
</html>
<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: login.php");
    die("Silahkan Login Terlebih dahulu");
} ?>