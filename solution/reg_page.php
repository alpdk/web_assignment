<?php
require "connection.php";
$email = $_POST["userEmail"];
$pwd = $_POST["userPwd"];
$confirm = $_POST["userConfirm"];

$emailSTR = mysqli_real_escape_string($con, $email);
$pwdSTR = mysqli_real_escape_string($con, $pwd);
$confirmSTR = mysqli_real_escape_string($con, $confirm);

if ($pwdSTR == $confirmSTR) {
    $request = "INSERT INTO `user` (email, password) VALUES ('$emailSTR', '$pwdSTR')";

    $req = mysqli_query($con, $request);

    header("Location: http://localhost:63342/solution/solution/login_page.html");
}
?>