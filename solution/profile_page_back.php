<?php
require "connection.php";
session_start();

$email = $_SESSION["userEmail"];
$pwd = $_SESSION["userPassword"];

$emailSTR = mysqli_real_escape_string($con, $email);
$pwdSTR = mysqli_real_escape_string($con, $pwd);

$query = "SELECT * FROM `user`
              WHERE email = '$emailSTR' AND password='$pwdSTR'";

$req = mysqli_query($con, $query);

$row = $req->fetch_assoc();
session_start();
$_SESSION["id"] = $row["id"];
$_SESSION["email"] = $row["email"];
//echo "id: " . $row["id"]. "<br>email: " . $row["email"]. "<br>";

header("Location: http://localhost:63342/solution/solution/profile_page.php");

?>
