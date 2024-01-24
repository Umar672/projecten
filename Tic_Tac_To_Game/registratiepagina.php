<?php
$db = new PDO("mysql:host=localhost;dbname=BKE",
"root", "root");
if (isset ($_POST['verzenden'])) {
        $naam = filter_input(INPUT_POST, "naam",
                                        FILTER_SANITIZE_STRING);
        $wachtwoord = filter_input(INPUT_POST, "wachtwoord",
                FILTER_SANITIZE_STRING);
        $query = $db->prepare("INSERT INTO profiel(naam, wachtwoord)
VALUES( '$naam','" . sha1 ('$wachtwoord') . "')" );
$query->bindParam("naam", $naam);
$query->bindParam("wachtwoord",$wachtwoord);
if($query->execute()) {
echo "De nieuwe gegevens zijn toegevoegd.";
}
else {
echo "Er is een fout opgetreden!";
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
    <title>VCAT GAMING STUDIOS</title>
    <link rel="icon" type="image/x-icon" href="/images/box-icon-vcat.png">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="tic-tac-toe/TicTacToe.js" defer></script>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<div class="bg">
  <p class="nii">Registreren:</p>

  <form method="post" action="">
    <p><label>Naam: </label>
      <input type="text" name="naam"></p>

    <label>Wachtwoord:</label>
    <input type="password" name="wachtwoord">
    <br><br>

    <p><input type="submit" name="verzenden" value="opslaan"> <a href="inlogpagina.php">aanmelden</a></p>

  </form>
</div>
</body>