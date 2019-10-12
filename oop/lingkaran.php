<?php

class BangunDatar{
	public $diameter, $jari2, $luas, $kll;
	function __construct($diameter, $jari2){
		$this->diameter = $diameter;
		$this->jari2 = $jari2;
	}

	public function getLuas(){
		$luas = 3.14*($this->jari2*$this->jari2);
		return $luas;
	}

	public function getKeliling(){
		$kll = 2*3.14*$this->jari2;
		return $kll;
	}

}

$circle1 = new BangunDatar(28,14);

echo $circle1->getLuas();
echo "<br>";
echo $circle1->getKeliling();