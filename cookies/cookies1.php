<?php
$value = 'potter';
$value2 = 'kuumbi';
setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

/* expire in 1 hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk
pemeriksaan cookies</h2>";
?>