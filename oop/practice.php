<?php

class Dealer{

	private $harga;
	protected $jenis_mesin,$merk,$diskon=0;

	public function __construct($harga,$merk,$jenis_mesin){
		$this->harga = $harga;
		$this->merk = $merk;
		$this->jenis_mesin = $jenis_mesin;
	}

	public function getHarga(){
		return $this->harga - ( $this->harga*$this->diskon / 100 );
	}
}


class Matic extends Dealer{
	
	public function setDiskon(){
		$this->diskon = 12;
		return $this->diskon;
	}

	public function getInfo(){
		$str = "Matic | <b>{$this->merk} ({$this->jenis_mesin})</b> , {$this->getHarga()}";
		return $str;
	}

}

class Gear extends Dealer{
	
	public function setDiskon(){
		$this->diskon = 20;
		return $this->diskon;
	}

	public function getInfo(){
		$str = "Gear | <b>{$this->merk} ({$this->jenis_mesin})</b> , {$this->getHarga()}";
		return $str;
	}
	
}
$vario = new Matic(15000000,"Honda","Silinder Tunggal");
$pulsar = new Gear(23000000,"Bajaj","Inline Six");
echo $vario->getInfo()."<br><br><hr><br>";
echo $pulsar->getInfo();

?>