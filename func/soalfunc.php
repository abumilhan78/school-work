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
    <legend>Luas Persegi</legend>
    <form action="" method="get">
        <label for="">Masukan Sisi </label>
        <input type="number" name="s" min="1" required>
        <br>
        <input type="submit" value="send" name="send">
    </form>
    </fieldset>
    <hr>
    <?php
        if (isset($_GET['send'])) {
            $sisi = $_GET['s'];

            function luas($s)
            {
                $luas = $s * $s;
                return "Luas Persegi dari sisi $s : $luas";
            }
            $luas = luas($sisi);
            echo $luas;
        }
    ?>
</body>
</html>