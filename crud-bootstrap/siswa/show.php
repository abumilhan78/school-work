<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $jk = $data['jenis_kelamin'];
            $tgl = $data['tgl_lahir'];
            $umur = $data['umur'];
            $agama = $data['agama'];
            $alamat = $data['alamat'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jk" readonly value="Laki-laki" <?php if($jk == "Laki-laki"){
                        echo "checked";
                    } ?> required>Laki-laki</td>
                    <td><input type="radio" name="jk" readonly value="Perempuan" <?php if($jk == "Perempuan"){
                        echo "checked";
                    } ?> required>Perempuan</td>
            </tr>
            <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" readonly value="<?php echo $tgl; ?>" required></td>
            </tr>
            <tr>
                    <th>Agama</th>
                    <td><select disabled>
                        <option value="Islam" <?php if($agama = "Islam"){ echo"selected"; } ?>>Islam</option>
                        <option value="Muslim" <?php if($agama = "Muslim"){ echo"selected"; } ?>>Muslim</option>
                    </select></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>