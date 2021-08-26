<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Operatory Logiczne</title>
    </head>
    <body>
        <?php
         /*
         Działania na danych typu bool. Operacje są wykonywane Analogicznie do Bramek logicznych.
         */

         $a1 = false; // Deklaracja zmiennych
         $b1 = true; 

         echo "<h1>Operatory Logiczne</h1>";

         echo "a = ";
         var_dump($a1);
         echo ", b = ";
         var_dump($b1); // Wipisuje zmienne

         // OR
         echo "<br><br>a OR b: ";
         var_dump($a1 or $b1); // Zamiast OR można użyć ||

         // AND
         echo "<br>a AND b: ";
         var_dump($a1 and $b1); // Zamiast AND można użyć &&

         // && i || mają większy piorytet niż OR i AND. w złożonych operacjach logicznych powinno się używać () w celu wymuszania pierszeństwa.

         // XOR
         echo "<br>a XOR b: ";
         var_dump($a1 xor $b1);

         // NOT
         echo "<br>NOT a: ";
         var_dump(!$a1); // NOT wymaga tylko jendej zmiennej ponieważ on neguje
        ?>
        <a href="index.html"><br><br>Wróć</a>
    </body>
</html>