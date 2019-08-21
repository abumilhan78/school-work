<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Nama </label><input type="text" name="name" required><br><br>
        <label>Nilai 1 </label><input type="number" name="numb" required><br><br>
        <label>Nilai 2 </label><input type="number" name="numb2" required><br><br>
        <input type="submit" name="send" value="Simpan">
        <input type="reset" name="delete" value="Reset"><br><br>
    </form>
    <?php
        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $grade = $_POST['numb'];
            $grade2 = $_POST['numb2'];
            $average = ($grade+$grade2)/2;
            echo "Nama Anda : <b>$name</b>";
            echo "<br>Nilai 1 : <b>$grade</b>";
            echo "<br>Nilai 2 : <b>$grade2</b>";
            echo "<br>Nilai Rata-rata : <b>$average</b>";
        }
    ?>
</body>
</html>
