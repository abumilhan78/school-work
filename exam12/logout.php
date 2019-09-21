<?php 
    session_start();
if (isset($_SESSION['log'])) {
unset ($_SESSION);
session_destroy();
//
header("location:login.php");
}
?>