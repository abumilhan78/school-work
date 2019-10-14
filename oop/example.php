<?php

class Kendaraan
{
	private $harga;
	protected $trademark, $madein;
	public function __construct($trademark, $madein, $harga){
		$this->trademark = $trademark;
		$this->madein = $madein;
		$this->harga = $harga;
		
	}

	public function getInfoLengkap(){
		return "$this->trademark || Made In : $this->madein, ($this->harga)";
	}
}

class Mobil extends Kendaraan
{
	public $jenis_mobil;
	public function __construct($trademark, $madein, $harga, $jenis_mobil){
		parent::__construct($trademark,$madein,$harga);
		$this->jenis_mobil = $jenis_mobil;
	}

	public function getInfoKendaraan(){
		$str = "Mobil($this->jenis_mobil) : $this->trademark || Made In : $this->madein. (Rp. $this->harga)";
		return $str;
	}
}

$nissan = new Mobil("Nissan-Juke","Italy",500000000,"Sport");

$nissan->getInfoKendaraan();


?>