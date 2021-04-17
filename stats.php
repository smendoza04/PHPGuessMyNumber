<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css?version=51" type="text/css">
        <title>Guess my Number</title>
    </head>
    <body>
        <div>
            <h1>Congrats</h1>
            <?php
            include "game.php";
            $game = unserialize($_SESSION["game"]);
            echo "<p> Tries: " . $game->getTries() . "</p>";
            
            if(isset($_POST["submit"])) {
                header("Location: index.php");
            }
            ?>
            
            <h2>Would you like to play again?</h2>
            <form method="post">
                <button class="btn" name="submit" type="submit">Play</button>
            </form>
    </body>
</html>
