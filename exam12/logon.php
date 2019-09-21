<?php 
    session_start();
    if (isset($_POST['send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "milhan" && $pass == "123") {
            $_SESSION['log'] = $user;
            header("location:index.php");
        }
    }else {
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Log-In</title>
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
                <form class="form-inline my-2 my-lg-0" action="logon.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="send">Login</button>
                </form>
            </div>
        </nav>
    </header>
        <div class="row">
            <div class="col-md-8">
                <img src="assets/alexander-popov-LoOC6U6gQpQ-unsplash.jpg" class="img-fluid">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="pass" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Log-in" name="send" class="btn btn-success">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>