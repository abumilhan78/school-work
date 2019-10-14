<?php

class Aritmatika{
	
	public $b1, $b2;
	
	public function __construct($b1,$b2){
		$this->b1 = $b1;
		$this->b2 = $b2;
	}

	public function Tambah(){
		$tambah = $this->b1 + $this->b2;
		return "Hasil Pertambahan $this->b1 + $this->b2 = $tambah";
	}

	public function Kurang(){
		$kurang = $this->b1 - $this->b2;
		return "Hasil Pengurangan $this->b1 - $this->b2 = $kurang";
	}

	public function Kali(){
		$kali = $this->b1 * $this->b2;
		return "Hasil Perkalian $this->b1 * $this->b2 = $kali";
	}

	public function Bagi(){
		$bagi = $this->b1 / $this->b2;
		return "Hasil Pembagian $this->b1 / $this->b2 = $bagi";
	}
}

$operasi = new Aritmatika($_POST['bil1'],$_POST['bil2']);
echo "<center><b>ARITMATIKA</b></center>";
echo $operasi->Tambah()."<br>";
echo $operasi->Kurang()."<br>";
echo $operasi->Kali()."<br>";
echo $operasi->Bagi()."<br>";

?>