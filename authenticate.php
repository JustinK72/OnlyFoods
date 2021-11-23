<?php

session_start();

$uname = $_POST['uname'];
$password = $_POST['psw'];
$testUser = "test";

$_SESSION['uname'] = $uname;
$_SESSION['psw'] = $password;


if ($uname == "Justin"){
    if ($password == "test"){
        header("Location: index.php");
    }
} else if ($uname == "Hammy"){
    if ($password == "test"){
        header("Location: index.php");
    }
} else if ($uname == "Noah"){
    if ($password == "test"){
        header("Location: index.php");
    }
} else{
    header("Location: signin.php");
}
/*

if ($password == "a") {
    header("Location: index.php");
*/
