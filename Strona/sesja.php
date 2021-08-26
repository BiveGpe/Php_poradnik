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
     <h3>Form</h3>

     <form action="sesja.php" method="post">
         <p>Imie: <input type="text" name="imie" id=""></p>
         <p>Nazwisko: <input type="text" name="nazwisko" id=""></p>
         <input type="submit" value="Klik">
     </form>

     <?php
         if(isset($_POST['imie']) && isset($_POST['nazwisko']))
         { 
             echo "siusiak";

         }
     ?>
     <a href="index.html">wróć</a>
    </body>
</html>