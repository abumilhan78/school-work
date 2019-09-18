<?php
    session_start();
    if (isset($_POST['send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "potter" && $pass = "123") {
            //menciptakan session
            $_SESSION['login'] = $user;
            header("location:practice.php");
        }
    }
        else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>

    <title>Log-in</title>
</head>
<body>
<br><br><br>
    
    <div class="container jumbotron-fluid col-md-7">
    <p class="p-lg-7 text-lg-center text-info"><b>Mohon Login Terlebih Dahulu</b></p>
    <form action="" method="post" class="align-content-center">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" placeholder="Username...">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" placeholder="Password...">
        </div>
        <div class="form-group">
      <input type="submit" class="btn btn-success btn-block" value="Kirim" name="send">
    </div>
    </form>
</div>

    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
        }
    
?>