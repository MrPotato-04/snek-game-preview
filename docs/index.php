<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>snekgame</title>
    <script src="/snek-game/node_modules/jquery/dist/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/snek-game/common_style/fonts.css?v=1">
    <link rel="stylesheet" href="styles/css/main.css?v=1">
    <link rel="stylesheet" href="styles/css/snake1.css?v=1">
    <link rel="stylesheet" href="styles/css/snake2.css?v=1">
    <script src="snekScript/game.js?v=1" defer type="module"></script>
    <script src="snekScript/burger.js?v=1" defer type="module"></script>
    </script>

</head>

<body>
    <div id="wrapper">
        <div class="header" id="header">
        <?php require_once("./../common_style/header.php") ?>
        </div>
        <div class="wrapper2">
            <?php include_once('./../common_style/menu.php') ?>
            <div id="game-board" class="game-board"></div>
        </div>
        <div class="wrapper-footer">
            <footer>
                <div id="footer" class="footer">
                    <div id="controls"></div>
                    <div id="scores"></div>

                </div>
            </footer>
        </div>

</body>

</html>