<?php
     session_start(); // Funkcja startująca sesje

     if(isset($_POST['imie'])) // Sprawdzenie czy formularz został wypełniony
     { 
         $_SESSION['user'] = $_POST['imie']; // Dodanie klucza user => imie do tablicy _SESSION z zawartością _POST
     }
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Sesja</title>
    </head>
    <body>
     <h1>Sesja</h1>

     <?php
         if(isset($_SESSION['user'])) // Jeśli sesja istnieje pokaże link do zamknięcia sesji
         {
     ?>
     
     <a href="sesja2.php">Zakończ Sesje<br></a>

     <?php
         }
         else // W przeciwnym razie pokaże formluarz do wypełnienia
         {
     ?>
        
     <h3>Form</h3>
     <form action="sesja.php" method="post">
         <p>Imie: <input type="text" name="imie" id=""></p>
         <input type="submit" value="Klik">
     </form><br>


     <?php
         }
         if(isset($_SESSION['user'])) // Jeśli sesja istnieje pokaże zawartość sesji
         { 
             echo "<br>Twoje imie: " . $_SESSION['user'] . "<br>";
         }
         else
         {
             echo "Wypełnij formularz<br>";
         }
     ?>
     <a href="index.html"><br>wróć</a>
    </body>
</html>