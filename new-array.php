<?php
for ($i=1; $i<10; $i++) {
    if ($i == 5){
    continue;}
    if ($i == 8){
    break;}
    echo "$i ";
    }
    echo "<br><br><br>";

for ($i=1; $i <= 10; $i++) { 
    echo "1 x $i = ". 1*$i ." ";
    if ($i%2 == 0) {
        echo "Ini Bilangan Genap";
    }
    else {
        echo "Ini Bilangan Ganjil";
    }
    echo "<br>";
}