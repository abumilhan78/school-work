<?php 

class Pegawai{
	public $nip,$nama,$alamat,$hari;
	public function __construct($nip,$nama,$alamat,$hari)
	{
		$this->nip = $nip;
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->hari = $hari;

	}

	public function getInfoPegawai(){
		$str = "|$this->nip| $this->nama ($this->alamat)";
		return $str;
	}

	public function getGajiKotor(){
		$gkotor = $this->hari * 75000;
		return "Gaji Kotor $this->nama : $gkotor";
	}

	public function getGajiBersih(){
		$gkotor = $this->hari * 75000;
		$gbersih = $gkotor - ($gkotor*2.5);
		return "Gaji Bersih $this->nama : $gbersih";
	}
}
if (isset($_POST['send'])) {
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$alamat = $_POST['alamat'];
	$hari = $_POST['hari'];
}

$sven = new Pegawai($nip,$nama,$alamat,$hari);

echo $sven->getInfoPegawai();
echo "<br>".$sven->getGajiKotor();
echo "<br>".$sven->getGajiBersih();

?>