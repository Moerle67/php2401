<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenübergabe</title>
</head>
<body>
    <h1>Übergaben von Daten</h1>
    <?php
        // var_dump($_GET);
        $name = $_GET['nachname'];
        $vorname = $_GET['vorname'];

        $zahl1 = $_GET['zahl1'];
        $zahl2 = $_GET['zahl2'];

        $zahl3 = $zahl1 + $zahl2;

        print("<h2>Guten Morgen, liebe(r) $vorname $name!</h2>");

        print("Ich habe ausgerechnet: $zahl1 + $zahl2 = $zahl3.");


    ?>
</body>
</html>