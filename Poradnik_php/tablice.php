<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Tablice</title>
    </head>
    <body>
         <?php
         $a1 = "Wiktor,Maciek,Kamil";

         echo "<h1>Tablice</h1>";
         echo "<h3>Stworzenie i Wypisanie 1 Tablicy </h3>";

         $tablica1 = array(1, 2, 3); // Deklaracja tablicy numerycznej za pomocą funkcji array(wartość1, wartość2, ...)
         echo $tablica1[0] . ','; // Odwołanie do pierwszego indexu tablicy
         echo $tablica1[1] . ','; // Odwołanie do drugiego indexu tablicy
         echo $tablica1[2]; // Odwołanie do trzeciego indexu tablicy

         echo "<h3>Stworzenie i Wypisanie 2 Tablicy </h3>";

         $tablica2[0] = 5; // Drugi sposób deklarowanie tablic
         $tablica2[1] = 10; // Index po indexie
         $tablica2[2] = 15;
         echo $tablica2[0] . ','; 
         echo $tablica2[1] . ','; 
         echo $tablica2[2]; 

         echo "<h3>Stworzenie i Wypisanie 3 Tablicy </h3>";

         $tablica3 = array('zero' => 0, 'one' => 1, 'two' => 2); // Deklaracja tablicy asocjacyjnej za pomocą funkcji array(index => wartość, ...)
         echo $tablica3['zero'] . ','; // Odwołanie do pierwszego indexu tablicy
         echo $tablica3['one'] . ','; 
         echo $tablica3['two']; 
         
         echo "<h3>Stworzenie i Wypisanie 4 Tablicy </h3>";

         $tablica4['zero'] = 5; // Drugi sposób deklarowanie tablic
         $tablica4['one'] = 10; // Index po indexie
         $tablica4['two'] = 15;
         echo $tablica4['zero'] . ','; // Odwołanie do pierwszego indexu tablicy
         echo $tablica4['one'] . ','; 
         echo $tablica4['two']; 
        
         $tablica1[0] = "Przykład"; // Nadpisanie indexu w tablicy Nazwa_tablicy[Index] = Nowa_wartość

         echo "<h3>Przykład Tablicy Wielowymiarowej</h3>";
 
         $tablica5[0][0]['zero'] = 2; // Stworzenie tzw tablicy trzywymiarowej, z czego dwa pierwsze indexy są numeryczne a trzeci asocjacyjny
         echo $tablica5[0][0]['zero']; // Odwołanie się do komórki danych w tablicy

         echo "<h3>Przydatne funkcje</h3>";

         echo "var_dump - "; 
         var_dump($tablica1); // Sposób na wypisanie danych z tablicy jak i informacji o nich
         echo "<br><br>";

         echo "print_r - ";
         print_r($tablica1); // Sposób na wypisanie danych z tablicy
         echo "<br><br>";

         echo "count - ";
         var_dump(count($tablica1)); // Liczy ilość indexów w tablicy
         echo "<br><br>";

         echo "explode - ";
         var_dump(explode(",", $a1)); // Funkcja explode rozbija stringi - $tab = explode(znak_rozdzielenia, string)
         echo "<br>";

         ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>