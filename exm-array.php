<?php
//change single array into multiple array
$angka=array(1,2,3,4,5,6,7,8,9,10);
$no=0;

for($i=0; $i < 2; $i++){
      for($j=0; $j < 5; $j++){
            $angkabaru[$i][$j]=$angka[$no];
            $no++;
      }
}

for($i=0; $i < 2; $i++){
      for($j=0; $j < 5; $j++){
            echo $angkabaru[$i][$j];
      }
}
