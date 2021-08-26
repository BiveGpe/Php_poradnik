<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Instrukcje Warunkowe (IF, ELSE)</title>
    </head>
    <body>
         <?php
         $a1 = 2; // Deklaracja zmiennych

         echo "<h1>Instrukcje Warunkowe (IF, ELSE)</h1>";
         echo "<h3>Działanie If </h3>";
        
         if($a1 == 1) // if(Warunek) - kod między klamrami zostanie wykonany gdy warunek = true
         {
             echo "Zmienna a = 1 <br>";
         }
         else if($a1 == 2) // else if(Warunek) - działa analogicznie jak if 
         {
             echo "Zmienna a = 2 <br>";
         }
         else // Wykona się gdy warunek w if i else if'ach = False
         {
             echo "a != 1, a != 2 <br>";
         }

         echo "<h3>Działanie skróconego If</h3>";

         echo $a1 == 1 ? "a to 1" : " a to na pewno nie 1"; // Wersja skrócona if (Procedura Warunek ? jeśli_true : jeśli false;)

         ?>
         <a href="index.html"><br><br>wróć</a>
    </body>
</html>