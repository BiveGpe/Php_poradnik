<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Operacja Arytmetyczne</title>
    </head>
    <body>
         <?php
         $a1 = 10; // Deklaracja zmiennych
         $b1 = 5; 
 
         echo "<h1>Operacja arytmetyczne na zmiennych</h1>";
         echo "<h3>a = $a1, b = $b1 </h3>"; // Wipisuje zmienne
 
         echo "Dodawanie: a + b = " . ($a1 + $b1) . "<br>"; // Dodawanie
         echo "Odejmowanie: a - b = " . ($a1 - $b1) . "<br>"; // Odejmowanie
         echo "Mnożenie: a * b = " . ($a1 * $b1) . "<br>"; // Mnożenie
         echo "Dzielenie: a / b = " . ($a1 / $b1) . "<br>"; // Dzielenie
         echo "Reszta z dzielenia: a % b = " . ($a1 % $b1) . "<br>"; // Reszta z dzielenia
         echo "Potęgowanie: $a1^$b1 = " . pow($a1, $b1) . "<br>"; // Potęgowanie wykonuję się funkcją pow(Wykładnik, Potęga)
         echo "Pierwiastek kwadratowy z $a1 = " . sqrt($a1) . "<br>"; // Pierwiastkowanie wykonuję się funkcją sqrt(Zmienna)
         echo "Zaokrąglanie Pierwiastka z $a1 =  " . round(sqrt($a1), 2) . "<br>"; // Zaokrąglanie round(Zmianna_lub_działanie, Ile_miejsc_po_przecinku)
 
         $a1 += 30; // Nadpisuje zmienna a1 dodając do niej 30
         $a1++; // Inkrementacja 
         $a1--; // Dekrementacja
         /*
         Istnieje post inkrementacja($a1++) jak i pre inkrementacja(--$a1), Analogicznie jest oczywiście z Dekrementacja.
         */

         ?>
         <a href="index.html"><br>Wróć</a>
    </body>
</html>