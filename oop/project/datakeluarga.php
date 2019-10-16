<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <fieldset>
    	<legend>Masukan Banyak Data</legend>
    	<form action="" method="POST">
    		<label>Banyak Keluarga</label>
    		<input type="number" name="bk"><br>
    		<input type="submit" name="send" value="Simpan">
    	</form>
    </fieldset>
    <?php 
    	if (isset($_POST['send'])) {
    		$byk = $_POST['bk'];
     ?>
     <fieldset>
     	<legend>Data-data Keluarga</legend>
     	<form action="keluargapro.php" method="POST">
     	<?php
     	for ($i=0; $i < $byk; $i++) { 
     	?>
     	<label>NIK</label>
     	<input type="number" name="nik[]"><br>
     	<label>Nama Lengkap</label>
     	<input type="text" name="nama[]"><br>
     	<label>Umur</label>
     	<input type="number" name="umur[]"><br>
     	<label>Alamat</label>
     	<textarea name="alamat[]"></textarea><br><hr>
     	
     <?php } ?>
     <input type="submit" name="send" value="Kirim">
     </form>
     </fieldset>
 <?php } ?>
</body>
</html>