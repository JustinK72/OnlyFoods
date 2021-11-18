<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Onlyfoods</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <?php echo "<heading> Welcome " . $_SESSION['uname'] . " to Onlyfoods!</heading>"; ?>
    <a href="signin.php">Log out</a>
</head>

<body ng-app="ui_page">


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/h2cpT-3Q.jpeg" alt="8 Count Nugget" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.vox-cdn.com/thumbor/-3bt2sZHhWuSO0g5Z1NS9mIU0xc=/0x0:2048x1719/1200x800/filters:focal(861x697:1187x1023)/cdn.vox-cdn.com/uploads/chorus_image/image/68617495/Chick_fil_a_No_12.0.jpg" alt="chicken-nugget" class="d-block">

            </div>
            <div class="carousel-item">
                <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/Header.jpg" alt="Yum" class="d-block">
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
        <h3>Chick-Fil-a</h3>
        <p>8-Count Nugget meal $7.19 250 calories<br>Chicken Sandwich meal $7.09 440 calories <br>12-Count Nugget meal $8.79 330 calories <br></p>
    </div>

    <div class="container mt-3" style="text-align: center">
        <a href="moesPage.php" class="btn btn-outline-primary">Unsure</a>
        <a href="moesPage.php" class="btn btn-outline-danger">Hate</a>
        <a href="moesPage.php" class="btn btn-outline-success">Like</a>
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
            width: auto;
            height: 75px;
        }
    </style>

</body>


</html>
