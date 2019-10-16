<?php
include 'connect.php';
class biodata extends Connect {
    // Menampilkan Semua Data
    public $umur;
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }

    // Menambah Data
    public function create($nama, $jk, $tgl, $agama, $alamat)
    {
        
        // INSERT INTO `siswa`(`id`, `nis`, `nama`, `alamat`) VALUES ([value-1],[value-2],[value-3],[value-4])
         mysqli_query($this->koneksi,"INSERT INTO `biodata`(`nama`, `jenis_kelamin`, `tgl_lahir`, `umur`, `agama`, `alamat`) VALUES ('$nama', '$jk', '$tgl', '$umur', '$agama', '$alamat')");
        
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
    public function update($id, $nama, $jk, $tgl, $agama, $alamat)
    {
        mysqli_query($this->koneksi,"update biodata set nama='$nama', jenis_kelamin='$jk', tgl_lahir='$tgl', umur='$this->umur',agama='$agama', alamat='$alamat' where id='$id'");
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
// koneksi DB
$db = new Database();

?>