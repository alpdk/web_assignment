<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            session_start();
            $user_id = $_SESSION["userId"];
            echo "$user_id's profile";
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
<?php include("navigation.php") ?>
<div class="profile-container">
    <img id="profile_picture" src="user_picture.jpg" alt="profile picture"/>
    <div class="profile-info">
        <?php
            $user_email = $_SESSION["userEmail"];
            echo "<h1>$user_id</h1>";
            echo "<p>$user_email</p>";
        ?>
    </div>
</div>

</body>
</html>