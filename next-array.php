<?php
//Numeric Array
$a = array('Milhan',21,true,14.76);

for ($i=4; $i >= 0 ; $i--) { 
    echo $a[$i] . "<br>";
}

//Associative Key Array
$asso =['name'=>'Milhan','age'=>16,'adress'=>'Bandung'];
foreach ($asso as $key => $value) {
    echo $key . " : " . $value . "<br>";
}