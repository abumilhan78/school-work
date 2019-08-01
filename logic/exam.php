<?php

$jambu = 15000;
$dus = 2000;
$sellJambu = $jambu*(6*5);
$sellKardus = $dus*6;
$sellTotal = $sellJambu+$sellKardus;


echo "Seorang pedagang menjual jambu dengan harga Rp. 15.000/kg. Di dalam tokonya terdapat 6 dus<br>dan disetiap dus berisi 5kg jambu. Dus bekas tempat jambu itu masih bisa dijual lagi<br>dengan harga Rp.2000/dus. Berapakah uang hasil penjualan seluruh jambu dan dus tersebut";
echo "<br><br>";
echo "Hasil Penjualan Jambu : ".$sellJambu;
echo "<br>";
echo "Hasil Penjualan Kardus : ".$sellKardus;
echo "<br>";
echo "Total Hasil Penjualan : ".$sellTotal;

