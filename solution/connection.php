<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "computer_games_data_base";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed!";
    exit();
}
?>