<?php
for ($i=1; $i <= 10; $i++) { 
    echo "Hitung Perkalian $i<br>";
    for ($j=1; $j <= 10; $j++) { 
        $f = $i*$j;
        echo "$i * $j = $f<br>";
    }
    echo "<br>";
}