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
    <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
            <a href="logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 2</center>
</body>
</html>
<?php } else {
    header("location: login.");
    // die("Silahkan Login Terlebih dahuli");
}
?>