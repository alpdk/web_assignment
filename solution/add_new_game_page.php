<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Game</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
<?php include("navigation.php") ?>
<div  class="form-page add-game">
<form action="add_new_game_page_backend.php" method="post" class="credentials-form main">
    <h1>new game</h1>
    <div class="credentials-container">
        <label for="gameName">name of the game</label>
        <input id="gameName" type="text" name="gameName">

        <label for="picture">picture</label>
        <input id="picture" type="text" name="picture">

        <label for="platforms">platforms</label>
        <input id="platforms" type="text" name="platforms">

        <label for="gameGenres">genres in game</label>
        <input id="gameGenres" type="text" name="gameGenres">

        <label for="price">price</label>
        <input id="price" type="number" name="price">

        <label for="gameDescription">Description</label>
        <textarea id="gameDescription" name="gameDescription"></textarea>
    </div>
    <button type="submit" class="form-submit" name="addNewGame">Add new game</button>
</form>
</div>
</body>
</html>