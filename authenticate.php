<?php

session_start();

$uname = $_POST['uname'];
$password = $_POST['psw'];
$testUser = "test";

$_SESSION['uname'] = $uname;
$_SESSION['psw'] = $password;


if ($uname == "food"){
    if ($password == "pass"){
        header("Location: index.php");
    }
} else{
    header("Location: signin.php");
}
/*

if ($password == "a") {
    header("Location: index.php");
*/
