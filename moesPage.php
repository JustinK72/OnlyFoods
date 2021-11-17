<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: signin.php');
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

        <?php echo "<heading> Welcome " . $_SESSION['uname'] . " to Onlyfoods!</heading>"; ?>
    <a href="signin.php">Log out</a>
</head>
<body>

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
                <img src="https://www.moes.com/-/media/moes/menu/burritos/moes_457694_menu-image-updates_891x490_burrito_v1.jpg?v=1&d=20201117T140643Z&h=490&w=891&la=en&hash=30ACA4DAA51298F34E" alt="moes" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="https://www.moes.com/-/media/moes/menu/bowls/moes_457694_menu-image-updates_891x490_bowl_v1.jpg?v=1&d=20201118T110709Z&h=490&w=891&la=en&hash=5019CCAA2617B254EBF7" alt="bowl" class="d-block">

            </div>
            <div class="carousel-item">
                <img src="https://www.moes.com/-/media/moes/menu/stacks/moes_457694_menu-image-updates_891x490_stack_v1.jpg?v=1&d=20201119T090044Z&h=490&w=891&la=en&hash=9BE47A189751D8452A6E0" alt="Yum" class="d-block">
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

    <div class="container-fluid mt-3" style="text-align: center">
        <h3>Moes Southwest Grill</h3>
        <p>Homewrecker Burrito with chicken and guac $7.00 625 Calories<br>Homewrecker Burito Bowl with Chicken and Guac $6.30 550 Calories<br>Sothwest Stack with Chicken Cheese and Southwest Ranch $7.69 650 Calories<br></p>
    </div>

    <div class="container mt-3" style="text-align: center">
        <a href="pandaPage.php" class="btn btn-outline-primary">Unsure</a>
        <a href="pandaPage.php" class="btn btn-outline-danger">Hate</a>
        <a href="pandaPage.php" class="btn btn-outline-success">Like</a>
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
