<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Versuch</title>
</head>
<body>
    <h1>Meine erste Seite</h1>
    <?php
        $name = "Ingo Mörl";

        print("<h2>Hallo, lieber $name!</h2>");

        print('<h2>Hallo, lieber $name!</h2>');

        $zahl1 = 1;
        $zahl2 = 2;

        print("Meine Zahlen $zahl1, $zahl2");

        print("<br />");
        var_dump($zahl1);
        print("<br />");
        var_dump($zahl2);

        print("<br />");
        
        // +
        print("$zahl1 + $zahl2 = ".$zahl1+$zahl2);

        // -

        // *

        // /

        // %

        // **
    ?>
</body>
</html>