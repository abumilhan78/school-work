<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <center>Data Siswa
    <a href="/crud-bootstrap/siswa/create.php">Input Data Siswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $siswa = new Siswa();
            $no = 1;
            foreach($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');ALTER TABLE nama_tabel_lama RENAME TO nama_tabel_baru;">Delete</a></td>
        </tr>
        <?php }?>
    </table></center>
</body>
</html>