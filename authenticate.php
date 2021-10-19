<?php

session_start();

$uname = $_REQUEST['username'];
$password = $_REQUEST['pwd'];

if ($pwd == "bar") {
    $_SESSION['user'] = $user;
    header("Location: ui_page.html");
} else {
    header("Location: LoginPage.html");
