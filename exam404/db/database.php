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
        
        $datasiswa = mysqli_query($this->koneksi,"select * from cart");
        // var_dump($datasiswa);
        return $datasiswa;
    }

    // Menambah Data
    public function create($nama, $kategori, $jml, $hrg, $desk, $sub)
    {
         mysqli_query($this->koneksi,"INSERT INTO `cart`(`nama_produk`, `kategori`, `jml_produk`, `hrg_produk`, `desk`, `sub_total`) VALUES ('$nama','$kategori',$jml,$hrg,'$desk',$sub)");
        
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from cart where id='$id'");
        return $datasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from cart where id='$id'");
        return $datasiswa;
    }

    // mengupdate data berdasarkan id
    public function update($id, $nama, $kategori, $jml, $hrg, $desk, $sub)
    {// UPDATE `cart` SET `nama_produk`=[value-2],`kategori`=[value-3],`jml_produk`=[value-4],`hrg_produk`=[value-5],`desk`=[value-6],`sub_total`=[value-7] WHERE `id`=[value-1]
        mysqli_query($this->koneksi,"UPDATE `cart` SET `nama_produk`='$nama',`kategori`='$kategori',`jml_produk`='$jml',`hrg_produk`='$hrg',`desk`='$desk',`sub_total`='$sub' WHERE `id`='$id'");
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from cart where id='$id'");
    }
}
// koneksi DB
$db = new Siswa();

?>