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
        <title>Latihan 1</title>
    </head>

    <body>
        <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
            <a href="logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 1</center>
        <fieldset>
            <legend>Latihan 1</legend>
            <pre>
                <form action="" method="post">
                    <label for="">Nama</label>    
                    <input type="text" name="nama">
                    <br>
                    <input type="submit" name="sbm" value="Simpan">
                </form>
            </pre>
            <?php if (isset($_POST['sbm'])) {
                    $a = $_POST['nama'];
                    echo "Nama Saya: $a";
                } ?>
        </fieldset>
    </body>

    </html>

<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>