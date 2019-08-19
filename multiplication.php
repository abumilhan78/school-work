<?php

for ($i=1; $i <= 10; $i++) { 
    echo "Perkalian $i";
    echo "<br>";
    for ($j=1; $j <= 10; $j++) { 
        $p = $i*$j;
        echo "$i x $j = ". $p ." ";
        if ($p%2 == 0) {
            echo "Ini Bilangan Genap";
        }
        else {
            echo "Ini Bilangan Ganjil";
        }
        echo "<br>";
    }
    echo "<br>";
}