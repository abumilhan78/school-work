<?php

class produk{
	public $judul,$harga,$penerbit,$produser,$waktutamat;
	public function __construct($judul,$harga,$penerbit,$produser,$waktutamat){
		$this->judul = $judul;
		$this->harga = $harga;
		$this->penerbit = $penerbit;
		$this->produser = $produser;
		$this->waktutamat = $waktutamat;
	}

	public function getInfo(){
		return "$this->produser, $this->penerbit";
	}
}

class console_game extends produk{
	public function getInfoProduk(){
		$str = "Console Game : {$this->judul} | {$this->getInfo()} -{$this->waktutamat} Jam .(Rp. {$this->harga})";
	return $str;
	}
}

class film extends produk{
	public function getInfoProduk(){
		$str = "Film : {$this->judul} | {$this->getInfo()} -{$this->waktutamat} Jam .(Rp. {$this->harga})";
		return $str;
	}
}

$produk1 = new console_game("Mortal Kombat 11",500000,"NetherRealm Studios","Warner Bros. International Enterprises",65);
$produk2 = new film("Now You See Me",300000,"Ed Solomon","Alex Kurtzman",3);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
?>