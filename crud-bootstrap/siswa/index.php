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
    <link rel="stylesheet" type="text/css" href="DataTables/dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="DataTables/dt/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    

    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
              <a class="nav-item nav-link" href="#">Pricing</a>
              <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-12">
                
                             <table class="table table-bordered table-dark" id="example">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th colspan="3" style="text-align: center;">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
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
                                    <td><a class="btn btn-outline-info" href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
                                    <td><a class="btn btn-outline-warning" href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
                                    <td><a class="btn btn-outline-danger" href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');ALTER TABLE nama_tabel_lama RENAME TO nama_tabel_baru;">Delete</a></td>
                                </tr>
                                
                                <?php }?>
                            </tbody>
                            </table>
                        
            </div>
        </div>
    </div>

    <center>Data Siswa
    <a href="/crud-bootstrap/siswa/create.php" class="btn btn-outline-primary">Input Data Siswa</a>
    </center>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="DataTables/dt/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="DataTables/dt/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>


</html>