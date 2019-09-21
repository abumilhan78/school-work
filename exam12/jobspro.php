<?php 
if (isset($_SESSION['log'])) {
if (isset($_POST['send'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tgl'];
    $jml = $_POST['jml'];

    $namabr = $_POST['nmbr'];
    $kodebr = $_POST['kd'];
    $jenis = $_POST['jenis'];
    $hargas = $_POST['hrg'];
    $jmlbr = $_POST['jmlbr'];

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Invoice</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">Kuumbiyuutar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.php">Services <span class="sr-only">(current)</span></a>
                    </li>                
                </ul>
               <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="send">Logout</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card text-white bg-info mb-3 align-content-center">
                    <div class="card-header">Invoice Pembelian Barang</div><br>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $jml; ?></td>
                                    <td><?php echo $tgl; ?></td>
                                </tr>
                                <tr>
                                    <th colspan="10"><center>Daftar Buku Yang Dibeli</center></th>
                                </tr>
                                
                                
                            </table>
                            
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Satuan(Rp)</th>
                                    <th>jumlah Barang</th>
                                    <th>Total Harga(Rp)</th>
                                </tr>
                                <?php
                                    for ($i=0; $i <= count($jml); $i++) { 
                                        # code...
                                        $toth[$i] = $jmlbr[$i]*$hargas[$i];
                                        
                                    
                                ?>
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $namabr[$i]; ?></td>
                                    <td><?php echo $kodebr[$i];; ?></td>
                                    <td><?php echo $jenis[$i]; ?></td>
                                    <td><?php echo $hargas[$i]; ?></td>
                                    <td><?php echo $jmlbr[$i]; ?></td>
                                    <td><?php echo $toth[$i]; ?></td>
                                </tr>
                                    <?php } ?>
                            </table>
                            
                            <table class="table">
                                <tr>
                                    <th colspan="10"><center>Total Pembayaran</center></th>
                                </tr>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-md-right">Rp. <?php echo array_sum($toth); ?></td>
                                </tr>
                                <tr>
                                <?php 
                                    
                                    if (array_sum($toth) > 500000) {
                                        $disk = "20%";
                                        $disc = 0.2;
                                    } elseif (array_sum($toth) > 250000) {
                                        $disk = "10%";
                                        $disc = 0.1;
                                    }elseif (array_sum($toth) > 150000) {
                                        $disk = "5%";
                                        $disc = 0.05;
                                    }
                                ?>
                                    <td>Diskon(<?php echo $disk; ?>)</td>
                                    <td class="text-md-right">Rp. <?php echo (array_sum($toth)*$disc); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Pembayaran</td>
                                    <td class="text-md-right">Rp. <?php echo array_sum($toth)-(array_sum($toth)*$disc); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="10">Pembayaran</th>
                                </tr>
                            </table><hr class="bg-white">
                            <table class="table">
                                <form action="kembali.php" method="post">
                                    <div class="form-group">
                                        <label>Masukan Jumlah Uang</label>
                                        <input type="number" name="byr" min="<?php echo array_sum($toth)-(array_sum($toth)*$disc); ?>" class="form-control"><br>
                                        <input type="submit" value="Bayar" name="tbyr" class="btn btn-block btn-success">
                                    </div>
                                    <input type="hidden" name="total" value="<?php echo array_sum($toth)-(array_sum($toth)*$disc); ?>">
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
    <?php }else {
        header("location:logon.php");
    }
    
    ?>