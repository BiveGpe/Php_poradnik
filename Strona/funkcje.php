<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Funkcje</title>
    </head>
    <body>
         <?php
         echo "<h1>Funkcje</h1>";
         echo "<h3>Działanie Funkcji </h3>";

         function f1() // Deklaracja funkcji - function nazwa(parametry) {KOD}
         {
             echo "Siema jestem funkcja<br>";
         }

         function add($a, $b) // Przykład funkcji z parametrami
         {
             echo "$a + $b = " . ($a + $b) . "<br>";
         }

         function f3($a) // Przykład funkcji która zwraca wartość
         {
             $a *= 2;
             return $a; // Wartość jaką dana funkcja będzie zwracać
         }

         f1(); // Wywołanie funkcji
         add(5, 2); // Wywołując funkcje z parametrami trzeba dostarczyć jej argumentów czyli danych, ręcznie lub za pomocą zmiennej
         echo f3(5); // Wywołanie funkcji zwracającej dane

         ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>