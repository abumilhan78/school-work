<?php
function cetak_ganjil ($awal, $akhir) {
    for ($i=$awal; $i<$akhir; $i++) {
        if ($i%2 == 1) {
        echo "$i ";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);


function luas_lingkaran ($jari) {
return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$r = 10;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);

?>