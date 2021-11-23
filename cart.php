<?php

session_start();

echo "<h1>Matched Restaurants</h1>";

if ($_SESSION['chick'] == "like") {
    echo "<h2>Chick-Fil-a:</h2>" . "<br>";
    echo "<p>8-Count Nugget meal $7.19 250 calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>Chicken Sandwich meal $7.09 440 calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>12-Count Nugget meal $8.79 330 calories " . "<button type='button'>Buy!</button></p>" . "<br>";
}
if ($_SESSION['moe'] == "like") {
    echo "<h2>Moes Southwest Grill:</h2>" . "<br>";
    echo "<p>Homewrecker Burrito with chicken and guac $7.00 625 Calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>Homewrecker Burito Bowl with Chicken and Guac $6.30 550 Calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>Sothwest Stack with Chicken Cheese and Southwest Ranch $7.69 650 Calories " . "<button type='button'>Buy!</button> </p>" . "<br>";
}
if ($_SESSION['panda'] == "like") {
    echo "<h2>Panda Express:</h2>" . "<br>";
    echo "<p>Black Pepper Angus Steak with Vegtables and Lo mein Noodles $8.24 525 Calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>Orange Chicken and Rice $7.15 600 Calories " . "<button type='button'>Buy!</button></p>";
    echo "<p>Bowl of Kung Pao Chicken $5.50 490 Calories " . "<button type='button'>Buy!</button> </p>" . "<br>";
}