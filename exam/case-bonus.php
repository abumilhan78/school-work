<?php

$exm = [
        ["Volvo",22,18],
        ["BMW",15,13],
        ["Saab",5,2],
        ["Land Rover",17,15]
       ];

       for ($i = 0; $i < count($exm); $i++) {
        echo "<p><b>Data Mobil $i</b></p>";
        echo "<ul>";
        for ($j = 0; $j < 3; $j++) {
          echo "<li>".$exm[$i][$j]."</li>";
        }
        echo "</ul>";
      }