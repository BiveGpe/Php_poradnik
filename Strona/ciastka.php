<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Cookies</title>
    </head>
    <body>
     <h1>Cookies</h1>

     <h3>Form</h3>
     <form action="ciastka.php" method="post">
         <p>Imie: <input type="text" name="imie" id=""></p>
         <input type="submit" value="Klik">
     </form><br>

     <?php
         if(isset($_POST['imie'])) // Jeśli form został wypełniony
         {
             setcookie('imie', $_POST['imie'], time() + 3600); // Ciasteczka tworzymy funkcja setcookie(Nazwa_ciastka, Wartość, Ważność_ciastka)
             // Modyfikacja cookie odbywa się też funkcją setcookie z tym samym parametrem nazwy i nową wartośćą
         }
     ?>

     <h3>Zawartość ciastka</h3>

     <?php
         if(isset($_COOKIE['imie'])) // Jeśli wartość ciastka 'imie'
         {
             echo "ciastko imie = " . $_COOKIE['imie'] . "<br>"; // Wyświetla zawartość ciastka
     ?>

     <a href="ciastka2.php"><br>Usuń ciastko</a>

     <?php
         }
         else
         {
             echo "Nie masz ciastek";
         }
     ?>

     <a href="index.html"><br>wróć</a>
    </body>
</html>