<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Instrukcje Wyboru (SWITCH)</title>
    </head>
    <body>
        <?php
         $a1 = 2; // Deklaracja zmiennych na których będą wykonywane operacje

         echo "<h1>Instrukcje Wyboru (SWITCH)</h1>";
         echo "<h3>Działanie Switch </h3>";

         // Funkcja switch(Zmienna), w klamrach umieszczamy przypadki tzw ,,casy"
         switch($a1)
         {
             case 1:  // Case przypadek:
                 echo "Switch: 1<br>"; // Kod który zostanie wykonany w case 1
             break; // Koniec case, opuszczenie całego switch'a.

             case 2: case 3: // Można użyć dwóch lub więcej case'ów do tego samego kodu i zakończyć je break
                 echo "Switch: 2 lub 3<br>";
             break;

             default: // Przypadek podstawowy który wykona się gdy żaden case nie zostanie wybrany
                 echo "Na pewno nie 1,2,3<br>";
             break;
         }
        ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>