<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klasy i Obiekty</title>
</head>
<body>
    <h1>Klasy i Obiekty</h1>

    <?php
        class Osoba1 // class nazwa_klasy {KOD} 
        {
            public $imie; // Atrybuty klasy
            public $wiek; // Zakres public

            public function opis() // Funkcja klasy, metoda 
            {
                echo $this->imie . "<br>"; // $this->imie - musimy odwołać się do tej klasy w poszukiwaniu imie
                echo $this->wiek . " Lat<br><br>";
            }
        }

        $osoba1 = new Osoba1(); // Stworzenie obiektu - $Nazwa_Obiektu = new Nazwa_klasy(); - używamy nawiasów ponieważ wywołujemy konstruktor klasy 
        $osoba1->imie = "Wiktor"; // Przypisanie atrybutą wartości
        $osoba1->wiek = 19;
        $osoba1->opis(); // Wywołanie metody opis obiektu $osoba1 klasy Osoba

        $osoba2 = new Osoba1(); // Drugi obiekt z tej samej klasy 
        $osoba2->imie = "Marek";
        $osoba2->wiek = 13;
        $osoba2->opis(); 

    ?>

    <a href="index.html"><br>wróć</a>
</body>
</html>