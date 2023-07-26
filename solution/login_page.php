<?php
require "connection.php";
$email = $_POST["userEmail"];
$pwd = $_POST["userPwd"];

$emailSTR = mysqli_real_escape_string($con, $email);
$pwdSTR = mysqli_real_escape_string($con, $pwd);

$query = "SELECT * FROM `user`
              WHERE email = '$emailSTR' AND password='$pwdSTR'";

$req = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($req);

if ($req->num_rows > 0) {
    session_start();
    $_SESSION["userId"] = $result["id"];
    $_SESSION["userEmail"] = $email;

    header("Location: main_page.php");
} else {
    header("Location: login_page.html");
}

?>
