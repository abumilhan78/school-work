<?php 
class Database {
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db="latihan";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
class Siswa extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }

    // Menambah Data
    public function create($nama, $jk, $tgl, $umur, $agama, $alamat)
    {
         mysqli_query($this->koneksi,"INSERT INTO `biodata`(`nama`, `jenis_kelamin`, `tgl_lahir`, `umur`, `agama`, `alamat`) VALUES ('$nama','$jk','$tgl',$umur,'$agama','$alamat')");
        
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }

    // mengupdate data berdasarkan id
    public function update($id, $nama, $jk, $tgl, $umur, $agama, $alamat)
    {//UPDATE `biodata` SET `nama`=[value-2],`jenis_kelamin`=[value-3],`tgl_lahir`=[value-4],`umur`=[value-5],`agama`=[value-6],`alamat`=[value-7] WHERE `id`=[value-1]
        mysqli_query($this->koneksi,"update biodata set nama='$nama',jenis_kelamin='$jk' ,tgl_lahir='$tgl' ,umur='$umur', agama='$agama', alamat='$alamat' where id='$id'");
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
// koneksi DB
$db = new Siswa();

$db->create('Milhan','Laki-laki',date('Y'),15,'Muslim','Kopo');
?>