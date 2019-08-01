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
    <form action="#" method = "POST">
        <label>Input Your Name : </label>
        <input type="text" name = "nama">
        <br>
        <label>Input Your School : </label>
        <input type="text" name="sekolah">
        <br>
        <input type="button" value="submit">
    </form>
</body>
</html>


<?php

if (isset($_POST['submit']))
{
   echo $_POST['nama'];
   echo $_POST['sekolah'];
}

?>