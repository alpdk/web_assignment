<?php
require "connection.php";
$gameName = $_POST["gameName"];
$picture = $_POST["picture"];
$platforms = $_POST["platforms"];
$gameGenres = $_POST["gameGenres"];
$price = $_POST["price"];
$gameDescription = $_POST["gameDescription"];

$gameNameSTR = mysqli_real_escape_string($con, $gameName);
$pictureSTR = mysqli_real_escape_string($con, $picture);
$platformsSTR = mysqli_real_escape_string($con, $platforms);
$gameGenresSTR = mysqli_real_escape_string($con, $gameGenres);
$priceNUM = $price;
$gameDescriptionSTR = mysqli_real_escape_string($con, $gameDescription);

$request = "INSERT INTO `game` (name, picture, platforms, genres, price, description) VALUES ('$gameNameSTR', '$pictureSTR', '$platformsSTR', '$gameGenresSTR', '$priceNUM', '$gameDescriptionSTR')";

$req = mysqli_query($con, $request);

header("Location: http://localhost:63342/solution/solution/main_page.php");
?>