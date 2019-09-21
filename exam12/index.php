<?php 
session_start();
    if (isset($_SESSION['log'])) {
        # code...
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
            <a class="navbar-brand" href="#">Kuumbiyuutar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.php">Services </a>
                    </li>                
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="send">Logout</button>
                </form>
            </div>
        </nav>
    </header>
<br><br><br><br>
    <div class="container align-items-center">
        <div class="jumbotron bg-info">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>Selamat Datang Di Toko Kami</h2></center></div>
                <div class="card-footer"><center>Kami Tidak Pernah Meragukan Pelanggan Meskipun Permintaannya Aneh-Aneh</center></div>
            </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
    <?php } else {
        header("location:logon.php");
    }
    
    ?>