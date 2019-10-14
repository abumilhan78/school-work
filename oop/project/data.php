<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>
<body>
    <fieldset>
    	<legend>Isi Data Pegawai</legend>
    	<form action="datapro.php" method="POST">
    		<label>NIP</label>
    		<input type="text" name="nip"><br>
    		<label>Nama Lengkap</label>
    		<input type="text" name="nama"><br>
    		<label>Alamat</label>
    		<textarea name="alamat"></textarea><br>
    		<label>Jumlah Hari Produktif</label>
    		<input type="number" max="30" name="hari"><br>
    		<input type="submit" name="send" value="Kirim">
    	</form>
    </fieldset>
</body>
</html>