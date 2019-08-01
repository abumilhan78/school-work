<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Page</title>
</head>
<body>
    <a href="about.php">About Page</a>
    <FORM ACTION="form.php" METHOD="POST" NAME="input">
        input your name : <input type="text" name="nama"><br>
        input your school : <input type="text" name="sekolah"><br>
        <input type="submit" name="Input" value="Input">
    </FORM>
</body>
</html>


<?php

if (isset($_POST['Input'])) {
    $name = $_POST['nama'];
    $school = $_POST['sekolah'];
    echo "Your Name : <b>$name</b>";
    echo "<br><br>";
    echo "Your School : <b><i>$school</i></b>";
    }

?>
