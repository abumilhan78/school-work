<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['address'];
    $jenis_kelamin = $_POST['gender'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($email == "potter@yahoo.com" && $pass == "dodol") {
        echo "<h1>Account Status: Active</h1><br><br>";
        echo "Your Name : $nama<br>";
        echo "Your Address : $alamat<br>";
        echo "Your Gender : $jenis_kelamin<br>";
        echo "Your Religion : $agama<br>";
        echo "Your Email : $email<br>";
        
    }else {
        echo "<h1>Account Status: disactive</h1>";
    }


    if ($pass == "dodol") {
        echo "<br><h1>Status : Active</h1>";
    }else {
        echo "<br><h1>Status : Disactive</h1>";
    }
}