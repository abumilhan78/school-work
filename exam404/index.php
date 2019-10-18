<?php 
include 'db/database.php';
$barang = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <title>Cart Table(Exam)</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
	<div class="container">
		<div class="row justify-content-center" style="padding: 20px;">
			<div class="col-md-12">
				<div class="card bg-dark text-white">
					<div class="card-header">Data Keranjang
						<a href="create.php" class="btn btn-success float-right">Tambah Barang</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-primary table-bordered">
								<thead>
									<tr class="bg-success">
										<th>No</th>
										<th>Nama Produk</th>
										<th>Kategori</th>
										<th>Jumlah Produk</th>
										<th>Harga Produk</th>
										<th>Deskripsi</th>
										<th>Sub Total</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($barang->index() as $key) {
										$subtotal += $key['sub_total'];
									 ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $key['nama_produk']; ?></td>
										<td><kbd><?php echo $key['kategori']; ?></kbd></td>
										<td><?php echo $key['jml_produk']; ?></td>
										<td><?php echo $key['hrg_produk']; ?></td>
										<td><?php echo $key['desk']; ?></td>
										<td><?php echo $key['sub_total']; ?></td>
										<td><a href="show.php?id=<?php echo $key['id']; ?>&aksi=show" class="btn btn-outline-primary">Show</a><a href="edit.php?id=<?php echo $key['id']; ?>&aksi=edit" class="btn btn-outline-warning">Update</a><a href="db/proses.php?id=<?php echo $key['id']; ?>&aksi=delete" class="btn btn-outline-danger">Delete</a></td>
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
						<?php 
							echo "Total Pembayaran : $subtotal";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	

    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
</body>
</html>