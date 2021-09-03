<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Konstruktory i Destruktory</title>
</head>
<body>
    <h1>Konstruktory i Destruktory</h1>

    <?php
        class Osoba2 // Stworzenie klasy Osoba
        {
            public $imie; // Atrybuty
            public $wiek;

            public function __construct($imie, $wiek) // Konstrukt - domyślna metoda wykonywana przy tworzeniu obektu - __construct($argument1, $argument2 = Wartość domyślna)
            {
                $this->imie = $imie; // Przypisanie wartości pobranych przy tworzeniu obiektu do nadaia wartości jego atrybutom
                $this->wiek = $wiek;
            }

            public function opis() // Metoda
            {
                echo "Mam na Imie: " . $this->imie . ", Lat: " . $this->wiek . "<br>";
            }

            public function __destruct() // Destruktor - wywołuje się przy usuwaniu się obiektu
            {
                echo "<br>umarłem<br>";
            }
        }

        $osoba[1] = new Osoba2("Wiktor", 19); // Stworzenie obiektu z argumentami które zostaną przypisane do jej atrybutów - new Nazwa_klasy(argument1, ...);
        $osoba[1]->opis();

        $osoba[2] = new Osoba2("Kacper", 25); // Użycie tablicy do przechowywania obiektów 
        $osoba[2]->opis();
    ?>

    <a href="index.html"><br>wróć<br></a>
</body>
</html>