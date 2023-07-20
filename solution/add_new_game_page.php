<?php
require "connection.php";
$gameName = $_POST["gameName"];
$platforms = $_POST["platforms"];
$gameGenres = $_POST["gameGenres"];
$minPrice = $_POST["minPrice"];
$maxPrice = $_POST["maxPrice"];
$gameDescription = $_POST["gameDescription"];

$emailSTR = mysqli_real_escape_string($con, $email);
$pwdSTR = mysqli_real_escape_string($con, $pwd);
$confirmSTR = mysqli_real_escape_string($con, $confirm);

$gameNameSTR = mysqli_real_escape_string($con, $gameName);
$platformsSTR = mysqli_real_escape_string($con, $platforms);
$gameGenresSTR = mysqli_real_escape_string($con, $gameGenres);
$minPriceNUM = $minPrice;
$maxPriceNUM = $maxPrice;
$gameDescriptionSTR = mysqli_real_escape_string($con, $gameDescription);

$request = "INSERT INTO `game` (name, platforms, genres, min_price, max_price, description) VALUES ('$gameNameSTR', '$platformsSTR', '$gameGenresSTR', '$minPriceNUM', '$maxPriceNUM', '$gameDescriptionSTR')";

$req = mysqli_query($con, $request);

header("Location: http://localhost:63342/solution/solution/main_page.html");
?>