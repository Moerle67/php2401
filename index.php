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

        $zahl1 = 2;
        $zahl2 = 10;

        print("Meine Zahlen $zahl1, $zahl2");

        print("<br />");
        var_dump($zahl1);
        print("<br />");
        var_dump($zahl2);

        print("<br />");
        
        // +
        print("$zahl1 + $zahl2 = ".$zahl1+$zahl2);
        print("<br />");
        // -
        print("$zahl1 - $zahl2 = ".$zahl1-$zahl2);
        print("<br />");
        // *
        print("$zahl1 * $zahl2 = ".$zahl1*$zahl2);
        print("<br />");
        // /
        print("$zahl1 / $zahl2 = ".$zahl1/$zahl2);
        print("<br />");
        // %
        print("$zahl1 % $zahl2 = ".$zahl1%$zahl2);
        print("<br />");
        // **
        print("$zahl1 ** $zahl2 = ".$zahl1**$zahl2);

        // for ($i = 0; $i <= 120; $i++) {
        //     print("<br />");
        //     print("2 ** $i = ".(2**$i));
        // }

        $i=0;while($i<20){print("<br />");print("
            2**$i=".(2**$i
        ));$i=$i+1;}
    ?>
</body>
</html>