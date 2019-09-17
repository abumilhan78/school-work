<?php
if (isset($_POST['smpn'])) {
    $a = $_POST['bil'];
    $b = $_POST['pangkat'];

    for ($i=0; $i < count($a); $i++) { 
        for ($j=1; $j <= $b[$i]; $j++) { 
            echo $a[$i];
            if ($j < $b[$i]) {
             echo "x";
            }
        }
        $hasil = pow($a[$i], $b[$i]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        }else {
            echo "Bilangan Genap";
        }
        echo "<hr>";
    }
}
?>