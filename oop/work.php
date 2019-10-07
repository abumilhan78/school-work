<?php

class rpl2{

	public $nama=[],$jenis_kelamin,$umur,$tinggi,$berat;


	public function __construct($nama,$jenis_kelamin,$umur,$tinggi,$berat){
		$this->nama = $nama;
		$this->jenis_kelamin = $jenis_kelamin;
		$this->umur = $umur;
		$this->tinggi = $tinggi;
		$this->berat = $berat;
	}

	public function cetakInfoLengkap(){
		$str = "Nama = {$this->nama}<br>Jenis Kelamin = {$this->jenis_kelamin}
		<br>Umur = {$this->umur}<br>Tinggi Badan = {$this->tinggi}<br>
		Berat Badan = {$this->berat}<br>
		";
		
		return $str;
	}
}

$alif = new rpl2("Alif","Laki-laki",16,156,54);
$roni = new rpl2("Roni","Laki-laki",15,165,45);
$lola = new rpl2("Lola","Perempuan",16,153,47);
echo "<b>Data Siswa RPL2 Ke-1</b><br>".$alif->cetakInfoLengkap()."<br>";
echo "<b>Data Siswa RPL2 Ke-2</b><br>".$roni->cetakInfoLengkap()."<br>";
echo "<b>Data Siswa RPL2 Ke-3</b><br>".$lola->cetakInfoLengkap()."<br>";