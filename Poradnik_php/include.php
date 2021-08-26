<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Include & Require</title>
    </head>
    <body>
         <?php
         echo "<h1>Include & Require </h1>";
         echo "<h3>Działanie </h3>";

         include 'include2.php'; // Podłączenie pliku z kodem php - include 'Scieżka/do/pliku.php'
         require 'include2.php'; // Jeśli funkcji requiere nie uda się podłączyć pliku wtedy przerywa działanie programu
         /*
         do obydwu funkcji można dodać prefix ..._once - ogranicza użycie pliku do użycia go tylko raz
         */
         ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>