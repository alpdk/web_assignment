<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        body {
            font-family: 'PT Sans', 'Arial', sans-serif;
            font-size: 16px;
            color: #000;
        }
    </style>
</head>
<body>

<table style="width:100%">
    <tr>
        <td style="width:10%">
            <form>
                <div class="container">
                    <h1>Game parameters</h1>
                    <hr>
                    <label for="platforms"><b>Platforms</b></label>
                    <input id="platforms" type="text" name="platforms">
                    <label for="genres"><b>Genres</b></label>
                    <input id="genres" type="text" name="genres">
                    <label for="minPrice"><b>Min Price</b></label>
                    <input id="minPrice" type="number" name="minPrice">
                    <label for="maxPrice"><b>Max Price</b></label>
                    <input id="maxPrice" type="number" name="maxPrice">
                    <hr>
                    <button type="submit" class="loginbutton"><strong>Update parameters</strong></button>
                </div>
            </form>
        </td>
        <td style="width:80%; vertical-align:top">
            <div id="game">
                <div>
                    <div>
                        <div>
                            <div>
                                <h2>Games</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php
                        require "connection.php";
                        session_start();

                        $minPrice = $_GET['minPrice'];
                        $maxPrice = $_GET['maxPrice'];
                        $checkGenres = $_GET['genres'];
                        $checkPlatforms = $_GET['platforms'];

                        $new_sql = "SELECT * FROM game WHERE price <= $maxPrice AND price >= $minPrice";
                        $result = mysqli_query($con, $new_sql);
                        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach ($items as $row) {
                            $game_genres = $row["genres"];
                            $game_platforms = $row["platforms"];

                            if ((!str_contains(strtoupper($game_genres), strtoupper($checkGenres) AND !empty($checkGenres)))
                                OR (!str_contains(strtoupper($game_platforms), strtoupper($checkPlatforms))  AND !empty($checkPlatforms))) {
                                continue;
                            }

                            $game_id = $row["id"];
                            $game_picture = $row["picture"];?>
                            <div>
                                <?php
                                echo "<figure><img width='200' height='200' src='$game_picture'/></figure>";
                                echo "<button onclick='saveId($game_id)' type=\"submit\"><strong>More Info</strong></button>";
                                ?>
                            </div>
                            <script>
                                function saveId(id) {
                                    window.location = "game_page.php?id="+id
                                }
                            </script>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </td>

        <td style="width:10%; vertical-align:top">
            <form>
                <div class="container">
                    <button onclick="location.href='profile_page_back.php'"
                            type="button" class="profileButton">
                        <strong>Profile</strong></button>
                </div>
            </form>

            <br>

            <form>
                <div class="container">
                    <button onclick="location.href='http://localhost:63342/solution/solution/add_new_game_page.html'"
                            type="button" class="addNewGameButton">
                        <strong>Add new game</strong></button>
                </div>
            </form>
        </td>
    </tr>
</table>
</body>
</html>