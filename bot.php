<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css?version=51" type="text/css">
        <title>Guess my Number</title>
    </head>
    <?php
        include "game.php";
        $game = unserialize($_SESSION["game"]);
        $min = $game->getMin();
        $max = $game->getMax();
    ?>
    <body>
        <div>
            <h1>Guess my Number</h1>
            <form method="post">
                <input class="input" type="number" min=<?= $min ?> max=<?= $max ?> name="guess" />
                <button class="btn" name="submit" type="submit">Submit</button>
            </form>
            <?php
                
                if(isset($_POST["submit"])) {
                    $game->setAnswer($_POST["guess"]);
                    $game->gameBot();
                    $_SESSION["game"] = serialize($game);
                    header('Location: stats.php');
                }
                
                ?>
        </div>
    </body>
</html>
