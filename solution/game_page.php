<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table style="width:100%">
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

    echo "<tr>";
    echo "<span>$name</span> <br>";
    echo "<img src=\"$picture\" />";
    echo "</figure>";
    echo "</tr> <br>";
    echo "<tr>";
    echo "<span>Platforms: $plat</span> <br>";
    echo "<span>Price: $price</span> <br>";
    echo "<span>Genres: $genres</span> <br>";
    echo "<span>Description: $desc</span> <br>";
    echo "</tr>";
    ?>
</table>

</body>
</html>