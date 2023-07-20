<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table style="width:100%">
    <tr>
        <td style="width:20%; vertical-align:top">
            <img width="200" height="200" id="image" src="user_picture.jpg" />
        </td>
        <td style="width:80%; vertical-align:top">
            <?php
                session_start();
                echo "id: " . $_SESSION["id"]. "<br>email: " . $_SESSION["email"]. "<br>";
            ?>
        </td>
    </tr>
</table>

</body>
</html>