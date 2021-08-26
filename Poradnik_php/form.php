<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Formularz GET i POST</title>
    </head>
    <body>
     <h1>Formularz GET i POST</h1>
     <h3>GET</h3>

     <form action="form.php" method="get">
         <p>Imie: <input type="text" name="imie" id=""></p>
         <p>Nazwisko: <input type="text" name="nazwisko" id=""></p>
         <input type="submit" value="Klik">
     </form>

     <h3>POST</h3>

     <form action="form.php" method="post">
         <p>Imie: <input type="text" name="imie" id=""></p>
         <p>Nazwisko: <input type="text" name="nazwisko" id=""></p>
         <input type="submit" value="Klik">
     </form>

     <?php
         if(isset($_GET['imie']) && isset($_GET['nazwisko'])) // Sprawdza funkcją isset czy na tablicy get jest odpowiednia zmienna
         {
             echo "<br>GET:";
             echo "<br>Imie: " . $_GET['imie'];
             echo "<br>Nazwisko: " . $_GET['nazwisko'];
         }
         else if(isset($_POST['imie']) && isset($_POST['nazwisko'])) // Jak nie ma na get to sprawdza na post
         {
             echo "<br>POST:";
             echo "<br>Imie " . $_POST['imie'];
             echo "<br>Nazwisko " . $_POST['nazwisko'];
         }
         else // Jak nie ma ani get ani post
         {
             echo "<br>Wypełnij formularz";
         }
     ?>

     <a href="index.html"><br><br>wróć</a>
    </body>
</html>