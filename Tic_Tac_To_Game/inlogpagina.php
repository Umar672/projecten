<?php
$db = new PDO("mysql:host=localhost;dbname=BKE",
    "root", "root");
if (isset ($_POST['inloggen'])) {
    $naam = filter_input(INPUT_POST, "naam",
        FILTER_SANITIZE_STRING);
    $wachtwoord = sha1($_POST['wachtwoord']);
    $query = $db->prepare("SELECT * FROM profiel
                                        WHERE naam = :naam
                                        AND wachtwoord = :wachtwoord");
    $query->bindParam("gebruiker", $naam);
    $query->bindParam("ww", $wachtwoord);
    $query->execute();
    if ($query->rowCount() == 1) {
        echo "Juiste gegevens!";
    } else {
        echo "Onjuiste Gegevens!";
    }
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/images/box-icon-vcat.png">
    <title>VCAT GAMING STUDIOS</title>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="tic-tac-toe/TicTacToe.js" defer></script>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<div class="bg">
    <form method="post" action="">
        <p class="nii">Aanmelden: </p>
        <label>Gebruikersnaam: </label>
        <input type="text" name="username" required><br>

        <label>E-mail </label>
        <input type="text" name="email" required><br>

        <label>Naam: </label>
        <input type="text" name="username" required><br>

        <label>Wachtwoord: </label>
        <input type="text" name="password" required><br>

        <p><input type="submit" name="inloggen" value="Inloggen"> <a href="registratiepagina.php">registreren</a></p>

    </form>
</div>
</body>
