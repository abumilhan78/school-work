<?php
session_start();
if (isset($_SESSION['login'])) {
    # code...

if (isset($_POST['smpn'])) {
    $a = $_POST['bil'];
    $b = $_POST['pangkat'];

    for ($i=0; $i < count($a); $i++) { 
        for ($j=1; $j <= $b[$i]; $j++) { 
            echo $a[$i];
            if ($j < $b[$i]) {
             echo "x";
            }
        }
        $hasil = pow($a[$i], $b[$i]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        }else {
            echo "Bilangan Genap";
        }
        echo "<hr>";
    }
}
}else {
//session belum ada artinya belum login
// die ("Anda belum login! Anda tidak berhak masuk ke halaman
// ini.Silahkan login <a href='session0.php'>di sini</a>");
header("Location: login.php");
}
?>