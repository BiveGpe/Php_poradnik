<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Operatory Porównania</title>
    </head>
    <body>
         <?php
         $a1 = 10; // Deklaracja zmiennych na których będą wykonywane operacje
         $b1 = 5; 

         echo "<h1>Operacja arytmetyczne na zmiennych</h1>";
         echo "<h3>a = $a1, b = $b1</h3>"; // Wipisuje zmienne

         // Równe
         echo "$a1 == $b1 "; // a1 równe b1
         var_dump($a1 == $b1);
         echo "<br>";

         // Równiejsze
         echo "$a1 === $b1 ";
         var_dump($a1 === $b1); // Sprawdza nie tylko wartość, porównuje jeszcze typ danych
         echo "<br>";

         // Różne
         echo "$a1 != $b1 "; 
         var_dump($a1 != $b1); // można sotsować zamiennie != lub <>
         echo "<br>";

         // Różniejsze
         echo "$a1 !== $b1 "; 
         var_dump($a1 !== $b1); // Analogicznie do ===, wystarczą różne wartości lub różny typ danych żeby wartość była true
         echo "<br>";

         // Mniejsze
         echo "$a1 < $b1 "; 
         var_dump($a1 < $b1); // a mniejsze niż b
         echo "<br>";

         // Większe
         echo "$a1 > $b1 "; 
         var_dump($a1 > $b1); // a większe niż b
         echo "<br>";

         // Bądź równe
         echo "$a1 >= $b1 "; 
         var_dump($a1 >= $b1); // a większe niż b bądz równe b. Analogicznie a <= b, a mniejsze niż bądź równe
         echo "<br>";

         /*
         Porównywać ze sobą można również stringa czyli ciągi znaków
         */
         ?>

         <a href="index.html"><br>Wróć</a>
    </body>
</html>