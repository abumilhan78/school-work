<?php
$ageToni = 0.5;
$ageTama = 1;
$ageTinitoni = 34;
$ageTinitama = 14;


echo "Umur Tama = $ageTama X<br>";
echo "Umur Toni = $ageToni X<br>";
echo "Umur Toni + Umur Tini = $ageTinitoni <br>";
echo "$ageToni X + $ageTama X - $ageTinitama = $ageTinitoni <br>";
$solve = $ageTama + $ageToni;
$solve_1 = $ageTinitama + $ageTinitoni;
$solve_2 = $solve_1/$solve;
$toni = $solve_2/2;
$tini = $ageTinitoni-$toni;
echo "$solve X = $ageTinitama + $ageTinitoni<br>";
echo "$solve X = $solve_1<br>";
echo "X = $solve_1 : $solve = $solve_2<br>";
echo "Umur Tama = $solve_2<br>";

echo "Umur Tini = $tini<br>";

echo "Umur Toni = $toni<br>";