<?php 
include 'database.php';
$siswa = new Siswa();


$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $jml = $_POST['jml'];
    $hrg = $_POST['hrg'];
    $desk = $_POST['desk'];
    $sub = $jml*$hrg;
}

if($aksi == "tambah")
{
    $siswa->create($nama,$kategori,$jml,$hrg,$desk,$sub);
    header("location:../index.php");
    
}elseif($aksi == "update")
{
    $siswa->update($id,$nama,$kategori,$jml,$hrg,$desk,$sub);
    header("location:../index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:../index.php");
}
?>