<?php 
if (isset($_POST['send'])) {
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$umur = $_POST['umur'];
}
class Keluarga{
	public $nama,$nik,$alamat,$umur;
	function __construct($nik,$nama,$umur,$alamat){
		$this->nik = $nik;
		$this->nama = $nama;
		$this->umur = $umur;
		$this->alamat = $alamat;
	}

	public function getInfoKeluarga(){
		for ($i=0; $i <= count($this->nik); $i++) { 
			return "
			NIK : {$this->nik[$i]}<br>
			Nama : {$this->nama[$i]}<br>
			Umur : {$this->umur[$i]} Tahun<br>
			Alamat : {$this->alamat[$i]}<br><hr>
		";
		}
		
	}
}
var_dump($nik);
$keluarga1 = new Keluarga($nik,$nama,$umur,$alamat);
echo "<fieldset><legend>Anggota Keluarga</legend>";
	echo $keluarga1->getInfoKeluarga();
echo "</fieldset>";
?>