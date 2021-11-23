<?php

session_start();

$uname = $_POST['uname'];
$password = $_POST['psw'];
$testUser = "test";

$_SESSION['uname'] = $uname;
$_SESSION['psw'] = $password;

if ($uname == "Justin" || $uname == "justin") {
    if ($password == "test") {
        header("Location: index.php");
    }
} else if ($uname == "Hammy" || $uname == "hammy") {
    if ($password == "test") {
        header("Location: index.php");
    }
} else if ($uname == "Noah" || $uname == "noah") {
    if ($password == "test") {
        header("Location: index.php");
    }
} else {
    header("Location: signin.php");
}
/*

if ($password == "a") {
    header("Location: index.php");
*/
