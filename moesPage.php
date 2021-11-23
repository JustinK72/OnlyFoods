<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: signin.php');
}
if ($_SESSION['moe'] == "hate") {
    header("Location: pandaPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Moes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <?php echo "<heading> Welcome " . $_SESSION['uname'] . " to Onlyfoods!</heading>"; ?>
    <a href="signin.php">Log out</a>
</head>
<body>
<head>
    <style>
        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4V-sB8EradqdedJCUY8y5WvlMGzcv6Bw1eA&usqp=CAU');
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 650px;
            width: 65%;
        }
        .button1 {
            margin-left: auto;
            margin-right: auto;
            background-color: orange;
            height: 75px;
            right: auto;
        }
        heading {
            border-style: outset;
            background-color: #000000;
            color: white;
            text-align: center;
            font-size: medium;
            width: auto;
            height: 75px;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            height: 100px;
            width: 100px;
            background-color: purple;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }
    </style>
</head>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.moes.com/-/media/moes/menu/burritos/moes_457694_menu-image-updates_891x490_burrito_v1.jpg?v=1&d=20201117T140643Z&h=490&w=891&la=en&hash=30ACA4DAA51298F34E" alt="moes" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="https://www.moes.com/-/media/moes/menu/bowls/moes_457694_menu-image-updates_891x490_bowl_v1.jpg?v=1&d=20201118T110709Z&h=490&w=891&la=en&hash=5019CCAA2617B254EBF7" alt="bowl" class="img-fluid">

        </div>
        <div class="carousel-item">
            <img src="https://www.moes.com/-/media/moes/menu/stacks/moes_457694_menu-image-updates_891x490_stack_v1.jpg?v=1&d=20201119T090044Z&h=490&w=891&la=en&hash=9BE47A189751D8452A6E0" alt="Yum" class="img-fluid">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container-sm p-5 my-5 bg-dark text-white" style="text-align: center">
    <h3>Moes Southwest Grill</h3>
    <p>Homewrecker Burrito with chicken and guac $7.00 625 Calories<br>Homewrecker Burito Bowl with Chicken and Guac $6.30 550 Calories<br>Sothwest Stack with Chicken Cheese and Southwest Ranch $7.69 650 Calories<br></p>

    <?php
    if (isset($_POST['hate'])) {
        $_SESSION['moe'] = "hate";
        header("Location: pandaPage.php");
    }
    if (isset($_POST['unsure'])) {
        $_SESSION['moe'] = "ok";
        header("Location: pandaPage.php");
    }
    if (isset($_POST['like'])) {
        $_SESSION['moe'] = "like";
        header("Location: pandaPage.php");
    }
    if (isset($_POST['shop'])) {
        header("Location: cart.php");
    }
    ?>

    <form method="post">
        <input type="submit" name="hate" class="btn btn-outline-danger btn-lg" value="Hate"/>
        <input type="submit" name="unsure" class="btn btn-outline-primary btn-lg" value="Unsure"/>
        <input type="submit" name="like" class="btn btn-outline-success btn-lg" value="Like"/>
        <input type="submit" name="shop" class="btn btn-outline-warning btn-lg" value="Checkout"/>
    </form>
</div>

<style type="text/css">
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 650px;
        width: 65%;
    }
    .button1 {
        margin-left: auto;
        margin-right: auto;
        background-color: orange;
        height: 75px;
        right: auto;
    }
    heading {
        border-style: outset;
        background-color: #000000;
        color: white;
        text-align: center;
        font-size: medium;
        width: 100%;
        height: 75px;
    }
</style>
</body>
</html>
