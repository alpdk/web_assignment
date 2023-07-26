<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
    <?php include("navigation.php") ?>
    <div class="main-page">
        <form action="main_page.php" method="get" class="game-filters">
            <div class="game-filter-block">
                <h1>game parameters</h1>
                <div class="game-param-container">
                    <input id="platforms" type="text" name="platforms"><label for="platforms">platforms</label>
                    <input id="genres" type="text" name="genres"><label for="genres">genres</label>
                    <input id="minPrice" type="number" name="minPrice"><label for="minPrice">min price</label>
                    <input id="maxPrice" type="number" name="maxPrice"><label for="maxPrice">max price</label>
                </div>
            </div>
            <button class="form-submit" type="submit">Submit</button>
        </form>

        <div class="games-container">
            <?php
            require "connection.php";
            session_start();

            $minPrice = intval($_GET['minPrice'] ?? 0);
            $maxPrice = intval($_GET['maxPrice'] ?? 999999);
            if (($_GET['maxPrice'] ?? "") == "") {
                $maxPrice = 999999;
            }
            $checkGenres = $_GET['genres'] ?? '';
            $checkPlatforms = $_GET['platforms'] ?? '';

            $new_sql = "SELECT * FROM game WHERE price <= $maxPrice AND price >= $minPrice";
            $result = mysqli_query($con, $new_sql);
            $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
            <?php foreach ($items as $row) {
                $game_genres = $row["genres"];
                $game_platforms = $row["platforms"];

                if (!str_contains(strtoupper($game_genres), strtoupper($checkGenres))
                    or (!str_contains(strtoupper($game_platforms), strtoupper($checkPlatforms)))) {
                    continue;
                }

                $game_id = $row["id"];
                $game_picture = $row["picture"];
                echo "<a class=\"game-container\" href=\"game_page.php?id=$game_id\">";
                echo "<img src=\"$game_picture\"/>";
                echo "</a>";
            } ?>
        </div>
        <script defer>
            function setBackground(elem) {
                const url = elem.getElementsByTagName("img")[0].src
                elem.style.backgroundImage = "url(\"" + url + "\")"
            }

            document.querySelectorAll(".game-container").forEach(setBackground)
        </script>
    </div>
</body>
</html>