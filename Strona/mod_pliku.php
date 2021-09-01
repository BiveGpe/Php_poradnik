<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Odczyt i zapis do pliku</title>
    </head>
    <body>
        <h1>Odczyt i zapis do pliku</h1>

        <?php
            $a1 = 'Michał';

            $plik = fopen('imiona.txt', 'w'); // Funkcja fopen otwiera strumeń z plikiem - fopen(nazwa_pliku, mode)

            fwrite($plik, $a1 . " \n"); // Funkcja zapisuje w pliku - fwrite(Strumień, Dane). \n - znak nowej lini

            fclose($plik); // Po edycji pliku zawsze należy zamykać strumień funkcją fcolse(strumień)

            echo "<h3> Zapis do pliku odbywa się przy wejściu na strone</h3>";
            echo "<h3> Odczyt</h3>";

            $plik = file('imiona.txt'); // Zapisuje zawartość pliku do zmiennej plik

            echo "var_dump zmiennej z zawartośćą pliku <br>";
            var_dump($plik);
            echo "<br>";

            echo "<br> Wypisanie danych z tablicy <br>";
            foreach($plik as $imie) // Jako że zmienna plik jest tablicą do odczytania wszystkich wartości używamy pętli foreach
            {
                echo $imie . "<br>";
            }
        ?>

        <a href="index.html"><br>wróć</a>
    </body>
</html>