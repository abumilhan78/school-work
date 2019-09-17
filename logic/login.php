<?php
session_start();
if (isset($_POST['send'])) {
$a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "admin" && $b == "123456") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='array-form.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-In</title>
</head>
<body>
<center>
    <fieldset>
        <legend>Form Login</legend>
        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="user" required placeholder="Username...."><br>
            <label>Password</label>
            <input type="password" name="pass" required placeholder="Password...."><br>
            <input type="submit" value="Kirim" name="send">
        </form>
    </fieldset>
</center>
</body>
</html>
<?php } ?>