<?php
session_start();
session_unset();
$_SESSION['chick'] = 'ok';
$_SESSION['moe'] = 'ok';
$_SESSION['panda'] = 'ok';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
        <style>
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
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="https://s1.1zoom.me/b4857/620/Fast_food_Hamburger_Vegetables_Fire_Two_520128_1920x1080.jpg">
                    <h1>OnlyFoods</h1>
                    <button class=button1 onclick="document.getElementById('id01').style.display = 'block'">Login</button>

                    <button class=button2 onclick="">Register</button>

                </div>
            </div>
        </div>

        <div id="id01" class="modal">

            <form class="modal-content animate" action="authenticate.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://www.looper.com/img/gallery/heres-where-you-can-watch-sausage-party/intro-1631631690.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <?php
//$_SESSION['uname'] = $_POST['uname'];
//$_SESSION['psw'] = $_POST['psw'];
        ?>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };
        </script>

    </body>
</html>
