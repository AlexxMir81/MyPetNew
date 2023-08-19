<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <?php 
        require_once("config.php");
        ?>
        <form action="/action/decrease.php" method="post">
            <label>Счастье: <?=$_SESSION["happiness"]?></label>
            <label>Сытость: <?=$_SESSION["satiety"]?></label>
            <label>Сон: <?=$_SESSION["sleep"]?></label>
            <input type="submit" id="decrease" value="test" hidden>
        </form>
        <form action="/action/game.php" method="post">
            <input type="submit" id="game" value="game">
        </form>
        <form action="/action/eat.php" method="post">
            <input type="submit" id="satiety" value="eat">
        </form>
        <form action="/action/sleep.php" method="post">
            <input type="submit" id="sleep" value="sleep">
        </form>

</body>
</html>