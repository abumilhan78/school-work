<?php 
include '../database.php';
$siswa = new Siswa();


$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $waktu = strtotime($tgl);
    $umur = date('Y') - date('Y',$waktu);
}

if($aksi == "tambah")
{
    $siswa->create($nama, $jk, $tgl, $umur, $agama , $alamat);

    header("location:index.php");
    
}elseif($aksi == "update")
{
    $siswa->update($id, $nama, $jk, $tgl, $umur, $agama, $alamat);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>