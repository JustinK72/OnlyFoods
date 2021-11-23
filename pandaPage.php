<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header('Location: signin.php');
}
if ($_SESSION['panda'] == "hate") {
    header("Location: index.php");
}
?>

<title>Panda Express</title>
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
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ50xmxC_tJ4FCShJWRnKa1-iBkk1Uc2zhdFg&usqp=CAU');
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
            <img src="https://d1ralsognjng37.cloudfront.net/2c9841a7-c2e5-4202-bcb4-dc7cff46c668.jpeg" alt="panda" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="https://www.vnatexas.org/wp-content/uploads/2021/03/Panda-Express-Orange-Chicken_Consumer-e1569841498459.jpg" alt="orange-chicken" class="img-fluid">

        </div>
        <div class="carousel-item">
            <img src="http://images.summitmedia-digital.com/yummyph/images/2019/09/30/panda-express-philippines-001.jpg" alt="Yum" class="img-fluid">
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

<div class="container-md p-5 my-5 bg-dark text-white" style="text-align: center">
    <h3>Panda Express</h3>
    <p>Black Pepper Angus Steak with Vegtables and Lo mein Noodles $8.24 525 Calories<br>Orange Chicken and Rice $7.15 600 Calories<br>Bowl of Kung Pao Chicken $5.50 490 Calories<br></p>

    <?php
    if (isset($_POST['hate'])) {
        $_SESSION['panda'] = "hate";
        header("Location: index.php");
    }
    if (isset($_POST['unsure'])) {
        $_SESSION['panda'] = "ok";
        header("Location: index.php");
    }
    if (isset($_POST['like'])) {
        $_SESSION['panda'] = "like";
        header("Location: index.php");
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
