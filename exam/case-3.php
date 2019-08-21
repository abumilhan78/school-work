<?php
for ($i=1; $i <= 10; $i++) { 
    echo "Hitung Perkalian $i<br>";
    for ($j=1; $j <= 10; $j++) { 
        $f = $i*$j;
        
        echo "$i * $j = $f =>";
        if ($f%2 == 1) {
            echo "Bilangan Ganjil";
        }else {
            echo "Bilangan Genap";
        }
        echo "<br>";
    }
    echo "<br>";
}