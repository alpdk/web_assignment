<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
<?php include("navigation.php") ?>
<div class="game-page">
    <?php
    require "connection.php";

    $gameId = $_GET['id'];

    $query = "SELECT * FROM `game` WHERE id = '$gameId'";

    $req = mysqli_query($con, $query);

    $row = mysqli_fetch_array($req, MYSQLI_ASSOC);

    $name = $row["name"];
    $picture = $row["picture"];
    $price = $row["price"];
    $plat = $row["platforms"];
    $genres = $row["genres"];
    $desc = $row["description"];

    echo "<div class='game-container'><img src=\"$picture\" /></div>";
    echo "<div class='game-summary'>";
    echo "<p>$plat</p>";
    echo "<p>$price\$</p>";
    echo "<p>$genres</p>";
    echo "</div>";
    echo "<div class='game-description'><p>$desc</p></div>";
    ?>
</div>
<script defer>
    function setBackground(elem) {
        const url = elem.getElementsByTagName("img")[0].src
        elem.style.backgroundImage = "url(\"" + url + "\")"
    }

    document.querySelectorAll(".game-container").forEach(setBackground)
</script>
</body>
</html>