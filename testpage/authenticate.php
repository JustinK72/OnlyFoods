<?php

session_start();

$uname = $_REQUEST['username'];
$password = $_REQUEST['pwd'];

if ($pwd == "shazam") {
    $_SESSION['user'] = $user;
    header("Location: index.php");
} else {
    header("Location: login.php");
}

