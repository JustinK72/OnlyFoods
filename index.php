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
  
<head>
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpFnfTi-LF7KmBhu3U--EClHv0vHX8_rZOSA&usqp=CAU');
}
    .container {
  position: relative;
}
.top-left {
  position: absolute;
  top: 8%;
  left: 16%;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8%;
  right: 16%;
}
img {
  width: auto;
  height: auto;
}

/* Full-width input fields */
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

h1 {
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  font-size: 180px;
  background-color: black;
  opacity: 0.7;
  color: orange;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.button1 {
  background-color: #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}
.button2 {
  background-color: #ff0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover {
  opacity: 0.6;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s;
}

@-webkit-keyframes animatezoom {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}

@keyframes animatezoom {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
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
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/h2cpT-3Q.jpeg" alt="8 Count Nugget" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.vox-cdn.com/thumbor/-3bt2sZHhWuSO0g5Z1NS9mIU0xc=/0x0:2048x1719/1200x800/filters:focal(861x697:1187x1023)/cdn.vox-cdn.com/uploads/chorus_image/image/68617495/Chick_fil_a_No_12.0.jpg" alt="chicken-nugget" class="img-fluid">

            </div>
            <div class="carousel-item">
                <img src="http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Stories%20Images/2018/08/nuggets/Header.jpg" alt="Yum" class="img-fluid">
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
        <h3>Chick-Fil-a</h3>
        <p>8-Count Nugget meal $7.19 250 calories<br>Chicken Sandwich meal $7.09 440 calories <br>12-Count Nugget meal $8.79 330 calories <br></p>
    

    
        <a href="moesPage.php" class="btn btn-outline-primary">Unsure</a>
        <a href="moesPage.php" class="btn btn-outline-danger">Hate</a>
        <a href="moesPage.php" class="btn btn-outline-success">Like</a>
    </div>


</body>
</html>
