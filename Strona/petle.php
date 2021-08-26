<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <title>Pętle (WHILE, DO WHILE, FOR, FOREACH)</title>
    </head>
    <body>
        <?php
             $a1 = 5; // Deklaracja zmiennych
             $tab = array('serce', 'nerki','wątroba');
             $i = $a1; 

             echo "<h1>Pętle (WHILE, DO WHILE, FOR, FOREACH)</h1>";
             echo "<h3>Działanie While </h3>";
    
             while($i > 0) // while(warunek_wykonania_pętli) {KOD}
             {
                 echo "while: $i<br>";
                 $i--;
             }
             
             echo "<h3>Działanie Do While </h3>";
             $i = $a1; //Przywrócenie zmiennej $i wartości zmiennej $a5
    
             do // do {KOD}while(warunek);
             {
                 echo "do while: $i<br>";
                 $i--;
             }while($i > 0);
    
             echo "<h3>Działanie For </h3>";
    
             for($i = $a1; $i > 0; $i--) // for(Zmienna; Warunek; Działanie_na_zmiennej) - segmenty w for'ze mogą zostać pominięte np for(Warunek; Działanie_na_zmiennej)
             {
                 echo "for: $i<br>";
             }
    
             echo "<h3>Działanie ForEach </h3>";
    
             foreach ($tab as $kay => $value) // foreach(Tabela as Index => Dane) lub (Tabela as Dane) - jest to pętla stworzona specjalnie do tablic i operacji na nich
             {
                 echo "foreach $kay = $value <br>";
             }

        ?>
        <a href="index.html"><br>wróć</a>
    </body>
</html>