<?php
require "connection.php";
$email = $_POST["userEmail"];
$pwd = $_POST["userPwd"];

$emailSTR = mysqli_real_escape_string($con, $email);
$pwdSTR = mysqli_real_escape_string($con, $pwd);

$query = "SELECT * FROM `user`
              WHERE email = '$emailSTR' AND password='$pwdSTR'";

$req = mysqli_query($con, $query);

if ($req->num_rows > 0) {
// output data of each row
    header("Location: http://localhost:63342/solution/solution/main_page.html");
}

?>
