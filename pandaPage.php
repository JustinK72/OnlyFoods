<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Panda Express</title>
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
                <img src="https://d1ralsognjng37.cloudfront.net/2c9841a7-c2e5-4202-bcb4-dc7cff46c668.jpeg" alt="panda" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="https://www.vnatexas.org/wp-content/uploads/2021/03/Panda-Express-Orange-Chicken_Consumer-e1569841498459.jpg" alt="orange-chicken" class="d-block">

            </div>
            <div class="carousel-item">
                <img src="http://images.summitmedia-digital.com/yummyph/images/2019/09/30/panda-express-philippines-001.jpg" alt="Yum" class="d-block">
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

    <div class="container-fluid mt-3">
        <h3>Panda Express</h3>
        <p>Black Pepper Angus Steak with Vegtables and Lo mein Noodles $8.24 525 calories<br>Orange Chicken and Rice $7.15 600 calories<br>Bowl of Kung pao chicken $5.50 490 calories<br></p>
    </div>

    <div class="container mt-3">
        <a href="index.php" class="btn btn-outline-primary">Unsure</a>
        <a href="index.php" class="btn btn-outline-danger">Hate</a>
        <a href="index.php" class="btn btn-outline-success">Like</a>
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
