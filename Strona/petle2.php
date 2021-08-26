<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Instrukcje Warunkowe w pętlach (break, continue, goto)</title>
    </head>
    <body>
        <?php
         $a1 = 5; // Deklaracja zmiennych
         $i = $a1;

         echo "<h1>Instrukcje Warunkowe w pętlach (break, continue, goto)</h1>";
         echo "<h3>Działanie Break </h3>";

         while($i > 0)
         {
             echo "while-break: $i<br>";

             if($i == 3) // Jeżeli zmienna $i osiągnie wartość 2 to warunek się spełni
            {
                 break; // Komenda break wyjdzie całkowicie z pętli
            }
             $i--;
         }

         echo "<h3>Działanie Continue i goto </h3>";
         $i = $a1;

         do 
         {
            if($i % 2 == 1) // Jeżeli reszta z dzielenia przez 2 wyniesie 1
             {
                 goto etykieta1; // Komenda goto Nazwa_etykiety; przeniesie nas do etykiety
             }
             echo "do while - goto i continue: $i<br>";
             $i--;
             continue; // Komenda continue pominie reszte linijek w pętli i przeniesie nas na początek pętli

             etykieta1: // Deklaracja etykiety - Nazwa_etykiety:
             $i--;

         }while($i > 0);
        ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>