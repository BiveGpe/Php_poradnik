<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Zmienne, stała, echo i podstawy</title>
    </head>
    <body>
         <?php
             // Komentarz w 1 linii

             /*
             Komentarz wiele lini
             */

             $zmienna1 = 'zmienna1'; // Deklaracja zmiennej, nie deklarujesz typu zmiennej(nie zaczynać nazwy od cyfry)
             $wsk = 'zmienna1';
             define('stala1', 'wartosc'); // Deklaracja stałej, Funkcja define('Nazwa_stałej', 'Zawartość_stałej')
            
             echo "<h1>Witaj Przybyszu</h1>"; // echo - konstrukt służący do wyświetlania string'ów
             echo "<h3>Wywoływanie zmiennych</h3>";
             
             echo "zmienna1 = $zmienna1<br>"; // Użycie zmiennej
             echo 'Próba wywołania $zmienna1<br>'; // Różnica między "" a ''
             echo 'Wywołanie ' . $zmienna1 . ' i wprowadzenie kropki <br>'; // Znak . jako symbol konkatenacji(Konkatenacja – łączenie ze sobą wyrażeń)
             echo "Użycie zmiennej wsk jako wskaźnika = " . $$wsk . "<br>"; // Użycie $$ powoduje skorzystanie z zmiennej jako wskaźnik
             echo "Stała1 = " . stala1 . "<br>" ; // Użycie stałej

             echo "<h3>Podstawowe funkcje</h3>";

             echo var_dump($zmienna1) . " - użycie funkcji var_dump<br>" ; // Wyświetla typ zmiennej i zawartość
             echo var_dump(isset($zmienna1)) . " - użycie funkcji isset<br>"; // Sprawdza czy zmienna jest zdeklarowana i czy jej wartość jest inna niż null,
             echo var_dump(is_int($zmienna1)) . " - użycie funkcji is_int<br>"; // Sprawdza czy zmienna jest typu Int(jest to alias do funkcji is_integer())
             /*
             Ogólnie funkcji do sprawdzania typów danych jest pełno
             wystarczy napisać is_ i zobaczyć podpowiedzi
             albo poszukać odpowiedniej na necie
             */

             $tekst = "25";
             $liczba = 25;
             echo "<h3>Automatyczna zmiana typu danych zmiennej</h3>";
             echo "Dodawanie int + string = " . ($tekst + $liczba) . "<br>"; // Php automatycznie może zmieniać typ zmiennej zależnie od potrzeby
         ?>

         <br><a href="index.html">Wróć</a>
    </body>
</html>