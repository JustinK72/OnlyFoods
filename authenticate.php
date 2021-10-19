<?php

session_start();

$uname = $_POST['uname'];
$password = $_POST['psw'];
$testUser = "test";

$_SESSION['uname'] = $uname;
$_SESSION['psw'] = $password;

if ($uname == "test"){
    if ($password == "bar"){
        header("Location: index.php");
    }
} else{
    header("Location: signin.php");
}
/*
if ($password == "bar") {
    //$_SESSION['uname'] = $user;
    header("Location: index.php");
} else {
    header("Location: signin.php");
}
 */