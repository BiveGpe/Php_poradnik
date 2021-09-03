<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dziedziczenie klas</title>
</head>
<body>
    <h1>Dziedziczenie klas</h1>

    <?php
        class Zwierze // Stworzenie klasy Zwierze 
        {
            public $imie; // Deklaracja atrybutów
            public $wiek; // Typ public - dostępna wszędzie
            private $private; // Typ private - dostępna tylko w własnej klasie 
            protected $protected;  // Typ protected - dostępna w własnej klasie jak i pochodnym

            public function __construct($imie)
            {
                echo "Zwierze zostało stworzone<br>";
                $this->imie = $imie;
            }
        
            public function say_Hi()
            {
                echo "Hi my name is " . $this->imie . "<br>";
            }
        }

        class Kot extends Zwierze // Klasa Kot dziedzicząca z klasy Zwierze
        {
            public function __construct($imie) // Construct - w przypadku braku własnego, zostanie użyty construct z rodzica
            {
                echo "Kot został stworzony<br>";
                parent::__construct($imie); // Parent::__construct(Zmienna) - gdzie::czego(zmienna)
            }

            public function get_Name()
            {
                return $this->imie;
            }
        }

        $kot[1] = new Kot("Marek"); // Stworzenie kota z argumentem Marek - const Kot przekazuje imie do const Zwierze gdzie dopiero jest zapisywane do atrybutu
        echo $kot[1]->get_Name() . "<br>"; // Wyświetlenie wartości atrybutu imie który był nadawany jak i nadawana wartość w clasie parent
        $kot[1]->say_Hi(); // Korzystanie z metody z klasy rodzica
    ?>
    
    <a href="index.html"><br>wróć<br>
</body>
</html>