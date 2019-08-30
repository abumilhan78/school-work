<?php
function luas_lingkaran ($jari) {
return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$r = 10;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);

//Contoh 2
function tambah_string ($str) {
$str = $str . ", Jakarta";
return $str;
}
//
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";
?>