<?php 

class Connect
{
	public $host = "localhost", $user = "root", $pass = 123, $db="latihan";
	public $koneksi;
	public function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
	}
}
include 'biodata.php';
?>