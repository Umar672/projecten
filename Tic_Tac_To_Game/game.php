<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/images/box-icon-vcat.png">
    <script src="tic-tac-toe/TicTacToe.js" defer></script>
    <title>Tic Tac Toe</title>

</head>
<body class="rickmorty">
    <embed src="sounds/soulja_boy_draco_ft._rich_the_kid_rick_n_morty_official_music_video_mp3_50130.mp3" loop="true"
           autostart="true" width="2" height="0">
    <header>
        <div id="score"></div>
        <script src="scoreboard/scoreboard.js" type="module"></script>
    </header>
    <div class="board" id="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>
    <div class="winning-message" id="winningMessage">
        <div data-winning-message-text id="win"></div>
        <button id="PlayAgainButton">Play Again?</button>
    </div>
    <footer class="backtoindex">
        <a href="index.php">
            <img id="imagev3" src="images/backfromgrame.gif" alt="backfromgrame">
        </a>
    </footer>
</body>
</html>