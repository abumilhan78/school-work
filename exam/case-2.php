<?php
$indo = 80;
$math = 70;
$average = ($indo+$math)/2;
$inform;
$grade;

if (($math>100) || ($math<0)) {
    $math = "Maaf Nilai Yang anda masukan tidak sesuai";
}

if (($indo>100) || ($indo<0)) {
    $indo = "IMaaf Nilai Yang anda masukan tidak sesuai";
}

if (($average>100) || ($average<0)) {
    $average = "Maaf Nilai Yang anda masukan tidak sesuai";
}

if($average >= 85) {
    $inform = "LULUS";
    $grade = "A";
}else if ($average >= 75) {
    $inform = "LULUS";
    $grade = "B";
}else if ($average >= 60) {
    $inform = "Tidak Lulus";
    $grade = "C";
}else if ($average <= 60) {
    $inform = "Tidak Lulus";
    $grade = "D";
}



echo "Nama : Mochammad Qaysa Al-Haq";
echo "<br>Kelas : RPL";
echo "<br><hr><br>";
echo "Nilai B.Indonesia : $indo";
echo "<br>Nilai Matematika : $math";
echo "<br>Nilai Rata-rata : $average";
echo "<br>Keterangan : <b>$inform</b>";
echo "<br>Grade : <b>$grade</b>";

