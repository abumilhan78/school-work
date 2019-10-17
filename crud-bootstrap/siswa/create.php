<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</td>
                    <td><input type="radio" name="jk" value="Perempuan" required>Perempuan</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" required></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Muslim">Muslim</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>