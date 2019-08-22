<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "achmatim" && $pass == "123") {
    echo "<h2>Login Succes</h2>";
    } else {
    echo "<h2>Login Failed</h2>";
    }
    }