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
        <legend>Luas Dan Keliling Lingkaran</legend>
        <form action="" method="get">
            <label for="">Masukan Jari-jari : </label>
            <input type="number" name="j" min="1" required>
            <br>
            <input type="submit" value="Simpan" name="send">
        </form>
    </fieldset>
    <?php
        if (isset($_GET['send'])) {
            $jari = $_GET['j'];

            function operasi($j)
            {
                $luas = 3.14 * $j * $j;
                $keliling = 2 * 3.14 * $j;

                return "Luas Lingkaran Dari Jari-jari $j = $luas<br>Keliling Lingkaran Dari Jari-jari $j = $keliling";
                
            }
            $op = operasi($jari);
            echo $op;
           
        }
    ?>
</body>
</html>